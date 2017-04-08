<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postitus extends CI_Model{
    
    function __construct() {
        $this->categoryTbl = 'kategooria';
        $this->commentTbl = 'kommentaar';
        $this->postTbl = 'postitus';
        $this->voteTbl = 'hääletus';
    }
    
    function addPost($data){
          $stored_procedure = "CALL lisaPostitus(?,?,?,?)";
          $params = array('user_id' => $data['userId'],
              'cat_id' => $data['kategooria_id'],
              'title' => $data['title'],
              'text' => $data['text']);
            $query = $this->db->query($stored_procedure,$params );
         
            return ($query ? TRUE : FALSE);
    }
    

}