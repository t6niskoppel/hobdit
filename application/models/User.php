<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    
    function __construct() {
        $this->userTbl = 'kasutaja';
    }
    
    
    function checkRows($params){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        if(array_key_exists("id",$params)){//fetchib kasutaja id järgi
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            //    $this->db->limit($params['limit'],$params['start']);
            //}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            //    $this->db->limit($params['limit']);
            //}
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
    
    public function insert($data) {

        $stored_procedure = "CALL lisaKasutaja(?,?,?)";
        $query = $this->db->query($stored_procedure, array('kasutajanimi' => $data['kasutajanimi'], 'email' => $data['email'], 'parool' => $data['parool']));
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

}