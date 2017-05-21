<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('postitus');
        $this->load->model('kategooria');
    }

    public function account() {
        $data = array();
        if ($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->user->checkRows(array('id' => $this->session->userdata('userId')));

            $this->load->view('header');
            $this->load->view('account', $data);
			$data['categories'] = $this->kategooria->getCategories();
            $this->load->view('sidebar', $data);
            $this->load->view('footer');
        } else {
            redirect('index.php/welcome/index');
        }
    }

//--------------------sisselogimise loogika ja vaade ------------------

    public function login() {
        $data = array();
        if ($this->session->userdata('success_msg')) {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if ($this->session->userdata('error_msg')) {
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if ($this->input->post('loginSubmit')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('parool', 'Parool', 'required');
            if ($this->form_validation->run()) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email' => $this->input->post('email'),
                    'parool' => md5($this->input->post('parool'))
                );
                $checkLogin = $this->user->checkRows($con);
                if ($checkLogin) {
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('userId', $checkLogin['ID']);
                    redirect('index.php/welcome/index/');
                } else {
                    $data['error_msg'] = lang("error_wrong_email_or_password");
                }
            }
        }

        $data['title'] = 'Login';
        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('footer');
    }

    public function registration() {
        $data = array();
        $userData = array();
        if ($this->input->post('regSubmit')) {

            $this->form_validation->set_rules('kasutajanimi', 'Kasutajanimi', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('parool', 'parool', 'required');
            $this->form_validation->set_rules('korda_parool', 'korda parooli', 'required|matches[parool]');

            $userData = array(
                'kasutajanimi' => strip_tags($this->input->post('kasutajanimi')),
                'email' => strip_tags($this->input->post('email')),
                'parool' => md5($this->input->post('parool'))
            );

            if ($this->form_validation->run()) {
                $insert = $this->user->insert($userData);
                if ($insert) {
                    $this->session->set_userdata('success_msg', lang("error_registration_successful"));
                    redirect('index.php/welcome/login');
                } else {
                    $data['error_msg'] = lang("error_registration_not_successful");
                }
            }
        }

        $data['user'] = $userData;
        $data['title'] = 'Register';
        $this->load->view('header', $data);
        $this->load->view('registreerimine', $data);
        $this->load->view('footer');
    }

    public function logout() {
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('index.php/welcome/index/');
    }

    //------------vaatab, kas antud emailiga kasutaja on olemas---------------
    public function email_check($str) {
        $mail['returnType'] = 'count';
        $mail['conditions'] = array('email' => $str);
        $checkEmail = $this->user->checkRows($mail);
        if ($checkEmail > 0) {
            $this->form_validation->set_message('email_check', lang("error_email_in_use"));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function index() {
        $data['categories'] = $this->kategooria->getCategories();
        $data['title'] = 'Avaleht';
        $this->load->view('header', $data);
        $this->load->view('avaleht');
        $this->load->view('sidebar', $data);
        $this->load->view('footer');
    }

    public function category() {
        $data = array();
        $userData = array();
        $data['title'] = 'Kategooriad';

        if ($this->input->post('new_postSubmit')) {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            $userData = array(
                'title' => strip_tags($this->input->post('title')),
                'text' => strip_tags($this->input->post('text')),
                'kategooria_id' => 1,
                'userId' => $this->session->userdata['userId']
            );

            if ($this->form_validation->run()) {
                $insert = $this->postitus->addPost($userData);
                if ($insert) {
                    $data['success_msg'] = lang("error_post_creation_successful");
                } else {
                    $data['error_msg'] = lang("error_post_creation_not_successful");
                }
            }
        }
        $data['categories'] = $this->kategooria->getCategories();
        $this->load->view('header', $data);
        $this->load->view('category_view', $data);
        $this->load->view('sidebar', $data);
        $this->load->view('footer');
    }

    public function post_view() {
        $data['categories'] = $this->kategooria->getCategories();
        $data['title'] = 'Postitus';
        $this->load->view('header', $data);
        $this->load->view('post_view');
        $this->load->view('sidebar', $data);
        $this->load->view('footer');
    }

    public function new_post() {
        $data['categories'] = $this->kategooria->getCategories();
        $data['title'] = 'Uus postitus';
        $this->load->view('header', $data);
        $this->load->view('new_post_view');
        $this->load->view('sidebar', $data);
        $this->load->view('footer');
    }

    public function kkk() {$data['title'] = 'Täpsem otsing';
        $data['categories'] = $this->kategooria->getCategories();
        $data['title'] = 'KKK';
        $this->load->view('header', $data);
        $this->load->view('kkk');
        $this->load->view('sidebar', $data);
        $this->load->view('footer');
    }

    public function about() {
        $data['title'] = 'Info';
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function search() {
        $data['title'] = 'Täpsem otsing';
        $data['categories'] = $this->kategooria->getCategories();
        $this->load->view('header', $data);
        $this->load->view('search', $data);
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

}
