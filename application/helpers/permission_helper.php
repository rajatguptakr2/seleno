<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**

 * Permission helper
 *
 * @package		Permission Helper
 * @subpackage          Helpers
 * @auothor	   	Ankit Rajput
 * @website		http://www.tekshapers.com
 * @company             Tekshapers Inc 
 * @since		Version 1.0
 */
/**
 * check_permission
 * this function check permission of access module for the current user
 *
 */
if (!function_exists('check_permission')) {

    function check_permission() {


        //create array permission as a key and user type as a value
        $arr = array(
            'dashboard' => array('1', '2', '3'),
            'master' => array('1', '2', '3'),
            'user/profile' => array('1', '2', '3'),
            'user/changeImage' => array('1', '2', '3'),
            'user/reset_password' => array('1', '2', '3'),
            'user/edit_profile' => array('1', '2', '3'),
            'booking' => array('1', '2'),
            'add_cpa' => array('1', '2')
        );
        $url = uri_segment(1);
        $url = ($url == 'user') ? $url . '/' . uri_segment(2) : $url;
        if (!in_array(currentuserinfo()->user_type, $arr[$url])) { //check permission of access module for the current user
            show_error("Permission Denied");
        }
    }

}

