<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Landing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //is_protected();
        $this->load->model('landing_model');
    }

    public function index() {

        $data['menu_list'] = $this->landing_model->menu_list();
        $data['cms_list'] = $this->landing_model->cms_list();
        
        $data['title'] = WEBNAME.' | Leading Through Technology';
        $data['page_title'] = WEBNAME.': Login';
         $this->load->view('default/welcome_index', $data);
    }

}
