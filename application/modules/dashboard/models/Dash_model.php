<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dash_model extends CI_Model {

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
        return $this->db->select('*')->get('userinfo')->num_rows();
    }
    
    public function total_user_result(){
        return $this->db->select('*')->where('status !=','delete')->order_by("id", "asc")->get('userinfo')->result();
    }
    
    public function view_user($id){
        return $this->db->select('*')->where('id',$id)->get('userinfo')->result();
    }
    
    public function fetch_data($id){
    return $this->db->select('*')->where('id',$id)->get('userinfo')->result();
    }

    public function register() {

        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['email'] = $_POST['email'];
        $data['contactno'] = $_POST['contactno'];
        $data['user_type'] = $_POST['user_type'];
        $data['status'] = $_POST['user_status'];
        $dt['sendpass'] = random_string('alnum', 7);
        $data['password'] = md5($data['sendpass']);
//        $data['password'] = md5($_POST['password']);
        $data['created_on'] = date('d-m-y H:i:s');

        
        $query = $this->db->insert('userinfo', $data);
        $bodycontent = '<ul>' . '' . '<span> Name: ' . ucfirst($_POST['fname']) . '</span></br>' . '' . '<span> Your Email Id: ' . ucfirst($_POST['email']) . '</span></br>' . '' . '<span> Your Password is: ' . $dt['sendpass']. '</span></br>'.'</ul>';
                email_send($_POST['email'], 'Welcome To Litmus Zone', $bodycontent, 'Litmus Zone');
               
        return true;
    }
    
     public function update($id) {
         
//         pr($_POST); die;
        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['email'] = $_POST['email'];
        $data['contactno'] = $_POST['contactno'];
        $data['user_type'] = $_POST['user_type'];
        $data['status'] = $_POST['user_status'];
//        $data['password'] = md5($_POST['password']);
        $data['created_on'] = date('d-m-y H:i:s');

        $query = $this->db->where('id',$id)->update('userinfo', $data);
        
        return true;
    }
    
    public function valid_user($user_id) {
        $query = $this->db->select('*')
                ->from('userinfo')
                ->where('id', $user_id)
                ->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteuser($user_id) {
        $this->db->where('id', $user_id)
                 ->update('userinfo',array('status'=>'delete'));
    }

    public function login() {

        $data['email'] = $_POST['email'];
        $data['password'] = md5($_POST['password']);

        $query = $this->db->select('*')->from('userinfo')->where($data)->get();
        if ($query->num_rows() >= 1) {

            $this->session->set_userdata('userinfo',$query->result()[0]);
            return TRUE;
        } else {

            return FALSE;
        }
    }
    
    public function is_valid_email() {

        $data['email'] = $_POST['email'];

        $query = $this->db->select('*')->from('userinfo')->where($data)->where('status!=', 'delete')->get()->num_rows();

        if ($query >= 1) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

}

?>
