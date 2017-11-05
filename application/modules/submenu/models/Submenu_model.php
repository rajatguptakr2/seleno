<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Submenu_model extends CI_Model {
    
    var $menu_table = "lz_submenu";
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
     public function menu_name(){
         
        return $this->db->select('*')->where('menu_status !=','delete')->get('lz_menu')->result();
    }
    
    public function total_user_result(){
        return $this->db->select('*')->where('submenu_status !=','delete')->order_by("submenu_id", "asc")->join('lz_menu','lz_menu.menu_id = lz_submenu.menu_id')->get($this->menu_table)->result();
    }
    
    public function view_user($menu_id){
        return $this->db->select('*')->where('submenu_id',$menu_id)->join('lz_menu','lz_menu.menu_id = lz_submenu.menu_id','LEFT')->get($this->menu_table)->result();
    }
    
    public function fetch_data($menu_id){
    return $this->db->select('*')->where('submenu_id',$menu_id)->get($this->menu_table)->result();
    }

    public function register() {
//        pr($_POST); die;
        $data['menu_id'] = $_POST['menu_id'];
        $data['submenu_name'] = $_POST['submenu_name'];
        $data['submenu_status'] = $_POST['submenu_status'];
        $data['created_on'] = date('d-m-y H:i:s');

        $query = $this->db->insert('lz_submenu', $data);
        return true;
    }
    
     public function update($menu_id) {
        $data['menu_id'] = $_POST['menu_id'];
        $data['submenu_name'] = $_POST['submenu_name'];
        $data['submenu_status'] = $_POST['submenu_status'];
        $data['created_on'] = date('d-m-y H:i:s');
        $query = $this->db->where('submenu_id',$menu_id)->update($this->menu_table, $data);
        
        return true;
    }
    
    public function valid_user($user_menu_id) {
        $query = $this->db->select('*')
                ->from($this->menu_table)
                ->where('submenu_id', $user_menu_id)
                ->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteuser($user_menu_id) {
        $this->db->where('submenu_id', $user_menu_id)
                 ->update($this->menu_table,array('submenu_status'=>'delete'));
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
    
    public function is_valmenu_id_email() {

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
