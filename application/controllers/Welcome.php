<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
	{
				$data['title'] = 'Avaleht';
        $this->load->view('header_loggedOut', $data);
        $this->load->view('avaleht');
		$this->load->view('footer');
	}

	public function category()
	{
				$data['title'] = 'Kategooriad';
        $this->load->view('header', $data);
        $this->load->view('category_view');
		$this->load->view('footer');
	}

    public function post_view()
	{
				$data['title'] = 'Postitus';
        $this->load->view('header', $data);
        $this->load->view('post_view');
		$this->load->view('footer');
	}

    public function new_post()
	{
				$data['title'] = 'Uus postitus';
        $this->load->view('header', $data);
        $this->load->view('new_post_view');
		$this->load->view('footer');
	}

	public function kkk()
	{
				$data['title'] = 'KKK';
        $this->load->view('header', $data);
        $this->load->view('kkk');
		$this->load->view('footer');
	}

public function about()
	{
				$data['title'] = 'Info';
        $this->load->view('header', $data);
        $this->load->view('about');
		$this->load->view('footer');
	}

public function search()
	{
				$data['title'] = 'Täpsem otsing';
        $this->load->view('header', $data);
        $this->load->view('search');
		$this->load->view('footer');
	}

public function register()
	{
				$data['title'] = 'Registreerimine';
				$this->load->view('header', $data);
				$this->load->view('registreerimine');
		$this->load->view('footer');
	}



}
