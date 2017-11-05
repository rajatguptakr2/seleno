<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Defaultset extends CI_Controller {

    public function __construct() {
        parent::__construct();
        is_protected();
    }

    public function index() {
//echo base_url('kjgh');    
        $this->load->view('welcome_message');
    }

}
