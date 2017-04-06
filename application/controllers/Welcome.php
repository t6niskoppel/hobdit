<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

    public function account() {
        $data = array();
        if ($this->session->userdata('isUserLoggedIn')) {
            $data['user'] = $this->user->checkRows(array('id' => $this->session->userdata('userId')));
            
            $this->load->view('header');
            $this->load->view('account', $data);
            $this->load->view('sidebar');
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
                    $data['error_msg'] = 'Wrong email or password, please try again.';
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
                    $this->session->set_userdata('success_msg', 'Registration successful. Please login to your account.');
                    redirect('index.php/welcome/login');
                } else {
                    $data['error_msg'] = 'Registration unsuccessful, please try again.';
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
            $this->form_validation->set_message('email_check', 'User with given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function index() {
        $data['title'] = 'Avaleht';
        $this->load->view('header', $data);
        $this->load->view('avaleht');
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

    public function category() {
        $data['title'] = 'Kategooriad';
        $this->load->view('header', $data);
        $this->load->view('category_view');
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

    public function post_view() {
        $data['title'] = 'Postitus';
        $this->load->view('header', $data);
        $this->load->view('post_view');
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

    public function new_post() {
        $data['title'] = 'Uus postitus';
        $this->load->view('header', $data);
        $this->load->view('new_post_view');
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

    public function kkk() {
        $data['title'] = 'KKK';
        $this->load->view('header', $data);
        $this->load->view('kkk');
        $this->load->view('sidebar');
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
        $this->load->view('header', $data);
        $this->load->view('search');
        $this->load->view('sidebar');
        $this->load->view('footer');
    }

}
