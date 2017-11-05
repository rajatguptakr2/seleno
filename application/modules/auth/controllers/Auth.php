<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
        
    }

    public function index() {

        $this->load->view('welcome_message');
    }

    public function login() {


        if ($this->session->userdata('isLogin') === 'yes') { // if user already login , redirect to user dashboard
            redirect(base_url('dashboard'));
        }
        $data['error_msg'] = null;
        if (isPostBack()) {
            $arr = $this->input->post(NULL, true);
            $login_type = '';
            $remember = $this->input->post('remember', true);
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $result = $this->auth_model->login_authorize('1');
            
            $result = json_decode($result);
//             pr($result);die;
            if ($result->status === 'success') {
                $this->session->set_userdata("userinfo", $result->result);
                $this->session->set_userdata("isLogin", 'yes');
//                $this->session->set_userdata("login_type", $login_type);
                $username_enc = custom_encryption($email, 'ak!@#s$on!', 'encrypt');
                $password_enc = custom_encryption($password, 'ak!@#s$on!', 'encrypt');
                if ($remember) { // set remember username and password in cookie 
                    setcookie('email', $username_enc, time() + (86400 * 30), "/");
                    setcookie('password', $password_enc, time() + (86400 * 30), "/");
                    setcookie('remember', $remember, time() + (86400 * 30), "/");
                } else {
                    setcookie('email', '', time() + (86400 * 30), "/");
                    setcookie('password', '', time() + (86400 * 30), "/");
                    setcookie('remember', $remember, time() + (86400 * 30), "/");
                }
                redirect(base_url('dashboard'));
            } else if ($result->status == 'error') {
                if ($result->error_msg != '') {
                    $this->session->set_flashdata("error", $result->error_msg);
                }
                redirect(base_url('')); // if user supper admin ,redirect to supper admin login page
            }
        }

        $data['title'] = 'Litmus Zone : Login';
        $data['page_title'] = 'Litmus Zone : Login';
        $this->load->view('login', $data);
    }

    public function register() {
//        print_r($_POST);
        if ($this->form_validation->run('auth/register') == TRUE) {

//            email_send($to, $subject, $bodycontent=null,$alias);

            if ($this->auth_model->register()) {

                $this->session->set_flashdata('message', '<span class="form_error">Successfully Registered</span>');
                email_send($_POST['email'], 'Welcome To Litmus Zone', 'You are Successfully Registered', 'Litmus Zone');
                redirect('/auth/login');
            } else {

                $this->session->set_flashdata('message', '<span class="alert alert-danger">Not Registered With Us</span>');
            }
        }
        $data['title'] = 'Litmus Zone : Register';
        $data['page_title'] = 'Litmus Zone : Register';

        $this->load->view('register', $data);
    }

    public function logins() {
        if ($this->form_validation->run('auth/login') == TRUE) {
//             email_send($to, $subject, $bodycontent=null,$alias);
            $new = $this->auth_model->is_valid_email();
//           echo $new; die;
            if ($new) {
                $res = $this->auth_model->login();
                if ($res) {
//                    pr($this->session->all_userdata());
                    redirect('dashboard/lc');
                } else {

                    $this->session->set_flashdata('message', '<span class="form_error">Password is Incorrect</span>');
                }
            } else {

                $this->session->set_flashdata('message', '<span class="form_error">This email is not registered with us</span>');
            }
        }
        $data['title'] = 'Litmus Zone : Login';
        $data['page_title'] = 'Litmus Zone : Login';
        $this->load->view('login', $data);
    }

   
    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url());
    }

}
