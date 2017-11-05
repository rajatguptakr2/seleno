<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_user_details')){
   function get_user_details($user_id){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
       //get data from database
       $query = $ci->db->get_where('users',array('id'=>$id));
       
       if($query->num_rows() > 0){
           $result = $query->row_array();
           return $result;
       }else{
           return false;
       }
   }
}

if (!function_exists('get_flashdata')) {

    function get_flashdata() {
        $CI = &get_instance();
        $success = $CI->session->flashdata('success') ? $CI->session->flashdata('success') : '';
        $error = $CI->session->flashdata('error') ? $CI->session->flashdata('error') : '';
        $warning = $CI->session->flashdata('warning') ? $CI->session->flashdata('warning') : '';
        $msg = '';
        if ($success) {
            $msg = '<div class="alert alert-success flash-row">
                            <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check green"></i>
                            ' . $success . ' </div>';
        } elseif ($error) {
            $msg = '<div class="alert alert-danger flash-row">
			<button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check green"></i>
			<strong>Error!</strong> ' . $error . ' </div>';
        } elseif ($warning) {
            $msg = '<div class="alert alert-warning flash-row">
			<button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
			' . $warning . '</div>';
        }
        return $msg;
    }

}
/* End of Function */



if(!function_exists('email_send')){
    
    function email_send($to, $subject, $bodycontent=null,$alias) {
        require APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;        // SMTP port to connect to GMail
        $mail->Username = "tekshapers.rajat@gmail.com";  // user email address
        $mail->Password = "RkG@_@2009";  // SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                          // TCP port to connect to
        $mail->setFrom('tekshapers.rajat@gmail.com',$alias);
        $mail->addAddress($to);   // Add a recipient
        $mail->isHTML(true);  // Set email format to HTML
       // $mail->addAttachment($attachment);
        $mail->Subject = $subject;
        
        $mail->Body = $bodycontent;
        
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
//        $mail->addCC('rajat.guptakr2@gmail.com');
//        $mail->addBCC('rajat.guptakr2@gmail.com');

//
//        $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
//        $val = 'assets/support/images/404-page-error.png';
//        echo $val;
//        $bodyContent =  "APPPATH.third_party/PHPMailer-master/PHPMailerAutoload.php";



    }

}
if(!function_exists('_layoutss')){
    
    function _layoutss($data){
        $ci = & get_instance();

        $ci->load->view('header',$data);
        $ci->load->view($data['page']);
        $ci->load->view('footer',$data);
                
                
    }
    
    
    
    
    
}

if(!function_exists('layoutss')){
    
    function layoutss($data){
        $ci = & get_instance();

        $ci->load->view('header',$data);
        $ci->load->view('guest',$data);
        $ci->load->view('footer',$data);
                
                
    }
    
    
    
    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    
   
    
    
}

function currentuserinfo() {
    $CI = &get_instance();
    return $CI->session->userdata()['userinfo'];
}   

//THIS FUNCTION GET DATA THROUGH ID
if (!function_exists('is_protected')) {

    function getdatathroughid($table = "", $attributes = "", $id = "") {
        $CI = &get_instance();
        $CI->db->select($attributes);
        $CI->db->from($table);
        if (!empty($id)) {
            $CI->db->where('id', $id);
        } else {
            $CI->db->where('status', 'active');
        }
        $query = $CI->db->get();
//        echo $CI->db->last_query();die;   
        if ($query->num_rows()) {
            return $query->result_array();
        }
        return false;
    }
}


if (!function_exists('upload_image')) {

    function upload_image($field_name, $img_file_name) {
//        pr($_FILES[]);
        $img_ectsn = explode(".", $img_file_name);
        $CI = &get_instance();
        $CI->load->library('upload');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
//      $config['max_size'] = '2048000';
        $config['overwrite'] = true;
        $config['encrypt'] = true;
        $new_name = time().'_'.rand(3,1000). '.' . $img_ectsn[1];
//        pr($new_name);
//        die;
        $config['file_name'] = $new_name;
        $CI->upload->initialize($config);
        $CI->load->library('upload', $config);
//pr($CI->upload->data());die;
        if (!$CI->upload->do_upload($field_name)) {
            return $CI->upload->display_errors();
        } else {
            $upload_data = $CI->upload->data();
            return $new_name;
        }
    }
}


if (!function_exists('upload_app_image')) {

    function upload_app_image($field_name, $img_file_name) {
//        pr($_FILES[]);  
        $img_ectsn = explode(".", $img_file_name);
        $CI = &get_instance();
        $CI->load->library('upload');
        $config['upload_path'] = './uploads/doc_image/';
        $config['allowed_types'] = 'gif|jpg|png';
//      $config['max_size'] = '2048000';
        $config['overwrite'] = true;
        $config['encrypt'] = true;
        $new_name = time().'_'.rand(3,1000). '.' . $img_ectsn[1];
//        pr($new_name);
//        die;
        $config['file_name'] = $new_name;
        $CI->upload->initialize($config);
        $CI->load->library('upload', $config);
//pr($CI->upload->data());die;
        if (!$CI->upload->do_upload($field_name)) {
            return $CI->upload->display_errors();
        } else {
            $upload_data = $CI->upload->data();
            return $new_name;
        }
    }
}


if (!function_exists('is_protected')) {

    function is_protected() {
        $CI = &get_instance();
//       echo ($CI->session->userdata('userinfo')->user_name); die();
        if ($CI->session->userdata('isLogin') != 'yes') {
            redirect(base_url());
        } else if ($CI->session->userdata('isLogin') == 'yes') {
            if ($CI->session->userdata('login_type') == 'spadmin') {
                //redirect("/dashboard");
            } else if ($CI->session->userdata('login_type') == 'user') {
                redirect("/");
            }
        } else {
            check_permission();
        }
    }

}

function is_superadminprotected() {
    $CI = &get_instance();
    if ($CI->session->userdata('superadminLogin') != 'yes') {
        redirect(base_url());
    } else {
        check_permission();
    }
}

function is_bothprotected() {
    $CI = &get_instance();
    if ($CI->session->userdata('superadminLogin') != 'yes' && $CI->session->userdata('isLogin') != 'yes') {
        redirect(base_url());
    } else {
        check_permission();
    }
}

/* End of Function */



/**
 * Id_encode
 *
 * This function to encode ID by a custom number
 * @param string
 * 	
 */
if (!function_exists('ID_encode')) {

    function ID_encode($id) {
        $encode_id = '';
        if ($id) {
            $encode_id = rand(1111, 9999) . (($id + 19)) . rand(1111, 9999);
        } else {
            $encode_id = '';
        }
        return $encode_id;
    }

}
/* End of function */

/**
 * Id_decode
 *
 * This function to decode ID by a custom number
 * @param string
 * 	
 */
if (!function_exists('ID_decode')) {

    function ID_decode($encoded_id) {
        $id = '';
        if ($encoded_id) {
            $id = substr($encoded_id, 4, strlen($encoded_id) - 8);
            $id = $id - 19;
        } else {
            $id = '';
        }
        return $id;
    }

}
/* End of function */

/**
 * set_flashdata
 *
 * This function set falsh message value
 * 
 * @access	public
 * 
 */
if (!function_exists('set_flashdata')) {

    function set_flashdata($type, $msg) {
        $CI = &get_instance();
        $CI->session->set_flashdata($type, $msg);
    }

}
/* End of Function */

/**
 * get_flashdata
 *
 * This function give custome flash message formate
 * 
 * @access	public
 * @return	html data
 */
if (!function_exists('get_flashdata')) {

    function get_flashdata() {
        $CI = &get_instance();
        $success = $CI->session->flashdata('success') ? $CI->session->flashdata('success') : '';
        $error = $CI->session->flashdata('error') ? $CI->session->flashdata('error') : '';
        $warning = $CI->session->flashdata('warning') ? $CI->session->flashdata('warning') : '';
        $msg = '';
        if ($success) {
            $msg = '<div class="alert alert-success flash-row">
                            <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check green"></i>
                            ' . $success . ' </div>';
        } elseif ($error) {
            $msg = '<div class="alert alert-danger flash-row">
			<button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check green"></i>
			<strong>Error!</strong> ' . $error . ' </div>';
        } elseif ($warning) {
            $msg = '<div class="alert alert-warning flash-row">
			<button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
			' . $warning . '</div>';
        }
        return $msg;
    }

}
/* End of Function */


/**
 * uri_segment
 * this function give url segment value
 * @param int 
 * @return string
 */
if (!function_exists('uri_segment')) {

    function uri_segment($val) {
        $CI = &get_instance();
        return $CI->uri->segment($val);
    }

}
/* End of Function */
if (!function_exists('isPostBack')) {

    function isPostBack() {
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')
            return true;
        else
            return false;
    }

}
/* End of Function */

/**
 * custom_encryption
 *
 * This function encryt and decrypt value on the base action value
 * @param string
 * @param string
 * @param string
 * 	
 * @return string
 */
if (!function_exists('custom_encryption')) {

    function custom_encryption($string, $key, $action) {
        if ($action == 'encrypt')
            return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5
                                                    ($key))));
        elseif ($action == 'decrypt')
            return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
    }

}
/* End of Function */
