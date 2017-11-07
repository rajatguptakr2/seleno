<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Landing_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }

    function menu_list() {
        $query = $this->db->select('*')
                        ->from('ss_menu')
                        ->where('status','active')
                        ->get();
                      //  pr($query->num_rows()); die;
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }                

    }
    function cms_list() {
        $query = $this->db->select('*')
                        ->from('ss_cms')
                        ->where('status','active')
                        ->get();
                      //  pr($query->num_rows()); die;
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }                

    }
    

}

?>
