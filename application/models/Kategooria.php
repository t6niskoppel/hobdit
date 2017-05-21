<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategooria extends CI_Model{
	
	public function getCategories(){
		$this->load->database();
		$query = $this->db->query("SELECT Kategooria from view_kategooriad");
		return $query->result_array();
	}
}