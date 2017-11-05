<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth_model extends CI_Model {

    var $user_table = "userinfo";
    
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

    public function register() {

        $data['fname'] = $_POST['fname'];
        $data['lname'] = $_POST['lname'];
        $data['email'] = $_POST['email'];
        $data['contactno'] = $_POST['contactno'];
        $data['password'] = md5($_POST['password']);
        $data['created_on'] = date('d-m-y H:i:s');

        $query = $this->db->insert('userinfo', $data);
        return true;
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

    
      function login_authorize($user_type = null) {
        
        $this->form_validation->set_rules('email', "Email", 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $email = $this->security->xss_clean($this->input->post('email', true));
        $password = $this->security->xss_clean($this->input->post('password', true));
        if ($this->form_validation->run() === false) {
            $data['error_msg'] = validation_errors();
            $data['status'] = 'error';
            $data['valid'] = FALSE;
            return json_encode($data);
            
        }
        $this->db->where("email", $email);
//        $this->db->where('user_type', $user_type);

        $query = $this->db->get($this->user_table);
//        echo $query->num_rows(); die;
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $password = md5($password);
            if ($password == $row->password) {
                $user_info = $row;
//            pr($user_info); die;
                unset($user_info->password);
                $user_info->name = $user_info->fname . ' ' . $user_info->lname;
                if ($user_info->status == "inactive") {
                    if ((int) $user_info->user_type === 1) {
                        $data['error_msg'] = "Your account has been inactive";
                    } else {
                        $data['error_msg'] = "Your account has been inactive";
                    }
                    $data['status'] = 'error';
                    return json_encode($data);
                }
//------update last login date time------
                $up['last_login'] = date("Y-m-d h:i:s");
                $this->db->where('id', $user_info->id);
               
                $this->db->update($this->user_table, $up);
//---------
                $data['status'] = 'success';
                $data['valid'] = TRUE;
                $data['user_type'] = $user_info->user_type;
//                $data['token'] = $user_info->token;
                $data['result'] = $user_info;
                return json_encode($data);
            }
        }
        $data['error_msg'] = "Invalid login credidential";
        $data['status'] = 'error';
        return json_encode($data);
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
