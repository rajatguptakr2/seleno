<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sets_model extends CI_Model {
    
    var $menu_table = "lz_sets";
    function __construct() {
        parent::__construct();
        $this->load->helper('string');
    }

    function forget_password() {
        $data['email'] = $_POST['email'];
        $data['password'] = md5(random_string('alnum', 7));
        $data['cpassword'] = random_string('alnum', 7);
        $whr['email'] = $_POST['email'];
        $this->db->update("cz_users", $data, $whr);
        $subject = $this->config->item('Admin_forgetpassword');
        $body = $this->load->view("email_template/admin/forget_password", array("data" => $data), true);
        sendMail($_POST['email'], $subject, $body);
    }
    
    public function total_user(){
        return $this->db->select('*')->get($this->menu_table)->num_rows();
    }
    
    public function total_user_result(){
        return $this->db->select('*')->where('set_status !=','delete')->order_by("set_id", "asc")->get($this->menu_table)->result();
    }
    
    public function view_user($set_id){
        return $this->db->select('*')->where('set_id',$set_id)->get($this->menu_table)->result();
    }
    
    public function fetch_data($set_id){
    return $this->db->select('*')->where('set_id',$set_id)->get($this->menu_table)->result();
    }

    public function register() {

        $data['set_name'] = $_POST['set_name'];
        $data['set_type'] = $_POST['set_type'];
        $data['set_status'] = $_POST['set_status'];
        $data['created_on'] = date('Y-m-d H:i:s');

        $query = $this->db->insert('lz_sets', $data);
        return true;
    }
    
     public function update($set_id) {
         
 $data['set_name'] = $_POST['set_name'];
        $data['set_type'] = $_POST['set_type'];
        $data['set_status'] = $_POST['set_status'];
        $data['created_on'] = date('Y-m-d H:i:s');

        $query = $this->db->where('set_id',$set_id)->update($this->menu_table, $data);
        
        return true;
    }
    
    public function valid_user($user_set_id) {
//    $q = $this->db->select('*')->from('lz_sets')->where('set_id',$user_set_id)->get()->num_rows();
//        if($q>0){
//            return FALSE;
//        }else{
//        
//             return true;
//        }
        
         $query = $this->db->select('*')
                ->from($this->menu_table)
                ->where('set_id', $user_set_id)
                ->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
     }

    public function deleteuser($user_set_id) {
       
        $this->db->where('set_id', $user_set_id)
                 ->update($this->menu_table,array('set_status'=>'delete'));
    }

    public function login() {

        $data['email'] = $_POST['email'];
        $data['password'] = md5($_POST['password']);

        $query = $this->db->select('*')->from($this->menu_table)->where($data)->get();
        if ($query->num_rows() >= 1) {

            $this->session->set_userdata($this->menu_table,$query->result()[0]);
            return TRUE;
        } else {

            return FALSE;
        }
    }
    
    public function is_valset_id_email() {

        $data['email'] = $_POST['email'];

        $query = $this->db->select('*')->from($this->menu_table)->where($data)->where('status!=', 'delete')->get()->num_rows();

        if ($query >= 1) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

}

?>
