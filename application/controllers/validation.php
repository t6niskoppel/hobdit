<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class validation extends CI_Controller {

    public function regControll()
    {

      if (!$this->input->is_ajax_request())
      {
        exit('No valid request!');
      }

  		$FormRules = array(
  			array(
  				'field' => 'kasutajanimi',
  				'label' => 'Username',
  				'rules' => 'required|trim|max_length[20]|is_unique[view_kasutajad.Kasutajanimi]'
  			),
  			array(
  				'field' => 'email',
  				'label' => 'Email',
  				'rules' => 'required|valid_email|max_length[50]|is_unique[view_emailid.email]'
  			),
  			array(
  				'field' => 'pass1',
  				'label' => 'Password',
  				'rules' => 'required|min_length[8]'
  			),
  			array(
  				'field' => 'pass2',
  				'label' => 'Password confirmation',
  				'rules' => 'required|matches[pass1]'
  			),
        array(
          'field' => 'kasutajatingimus',
          'label' => 'terms',
          'rules' => 'callback_terms'
        )
  		);

  		$this->form_validation->set_rules($FormRules);

  		if($this->form_validation->run())
  		{
        $_POST['pass1'] = md5($_POST['pass1']);
        $this->load->model('DBinsertion');
        if($this->DBinsertion->saveUser($_POST)){
          echo '<div class"success"><p><font size="5" color="green">Kasutaja edukalt registreeritud!</font></p></div>';

        } else {
          echo '<div class"success"><p><font size="5" color="green">Midagi läks valesti. Proovige hiljem uuesti.</font></p></div>';
        }
  		}
  		else
  		{
  			echo '<div class="error"><p><font size="3" color="red">'.validation_errors().'</font></p></div>';
  		}

    }


    public function terms($args)
    {
      return is_array($args)
  			? (empty($args) === FALSE)
  			: (trim($args) !== '');
    }



  }
