<?php

class DBinsertion extends CI_Model{

  public function saveUser($andmed){
    $this->load->database();
    $stored_procedure = "CALL lisaKasutaja(?,?,?)";
    if($this->db->query($stored_procedure,array('kasutajanimi'=>$andmed['kasutajanimi'],'email'=>$andmed['email'],'parool'=>$andmed['pass1']))){
        return 1;
      }
  }


}

 ?>
