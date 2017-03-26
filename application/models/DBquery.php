<?php

class DBquery extends CI_Model{

  public function usernameAvailable($user){
    $this->load->database();
    //$sql = "SELECT Kasutajanimi FROM view_kasutajad WHERE Kasutajanimi = ?";
    //$query = $this->db->query($sql, array($user));

    $query = $this->db->select('Kasutajanimi')->where('Kasutajanimi', $user)->get('view_kasutajad');
    if ($query->num_rows() === 0) {
      return TRUE;
    } else {
      return FALSE;
    }

  }


  public function emailAvailable($email){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM view_emailid WHERE Kasutajanimi = '.$email);

    return $query->num_rows() > 0;
  }
  
  public function loginValid($email){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM view_emailid WHERE Kasutajanimi = '.$email);

    return $query->num_rows() > 0;
  }

}

 ?>
