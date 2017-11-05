<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

     
    
    public function index() {
   
        $this->load->view('welcome_message');
    }

    public function send_emails() {
        $config = array();
        $config['useragent'] = "CodeIgniter";
        $config['mailpath'] = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'tekshapers.rajat@gmail.com';
        $config['smtp_pass'] = 'rkg@5853';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);

        $this->email->from('tekshapers.rajat@gmail.com', 'admin');
        $this->email->to('tekshapers.rajat@gmail.com');
        $this->email->cc('tekshapers.rajat@gmail.com');
//        $this->email->bcc($this->input->post('email'));
        $this->email->subject('Registration Verification: Continuous Imapression');
        $msg = "Thanks for signing up!
            Your account has been created, 
            you can login with your credentials after you have activated your account by pressing the url below.
//            ";
        $this->email->message($msg);
//$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));

        $this->email->send();

        show_error($this->email->print_debugger());
    }

    public function send_mail() {
        $this->load->library('My_PHPMailer');
        $mail = new PHPMailer();
//        print_r($mail); die;
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port = 465;                   // SMTP port to connect to GMail
        $mail->Username = "tekshapers.rajat@gmail.com";  // user email address
        $mail->Password = "rkg@5853";            // password in GMail
        $mail->SetFrom('tekshapers.rajat@gmail.com', 'Firstname Lastname');  //Who is sending the email
//        $mail->AddReplyTo("response@gmail.com", "Firstname Lastname");  //email address that receives the response
        $mail->Subject = "Email subject";
        $mail->Body = "HTML message";
//        $mail->AltBody = "Plain text message";
        $destino = "tekshapers.rajat@gmail.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "John Doe");
//         $get = $mail->Send();
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }

    //$this->load->view('sent_mail', $data);


    public function check() {
        require APPPATH.'third_party/PHPMailer-master/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;        // SMTP port to connect to GMail
        $mail->Username = "tekshapers.rajat@gmail.com";  // user email address
        $mail->Password = "rkg@5853";  // SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                          // TCP port to connect to

        $mail->setFrom('userinfo@unknow.com', 'CodexWorld');
//        $mail->addReplyTo('tekshapers.rajat@gmail.com', 'CodexWorld');
        $mail->addAddress('shwetaverma.3792@gmail.com');   // Add a recipient
        $mail->addCC('rajat.guptakr2@gmail.com');
        $mail->addBCC('rajat.guptakr2@gmail.com');

        $mail->isHTML(true);  // Set email format to HTML

        $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
        $val = 'assets/support/images/404-page-error.png';
        echo $val;
        $bodyContent =  "APPPATH.third_party/PHPMailer-master/PHPMailerAutoload.php";
        $mail->addAttachment($val);


        $mail->Subject = 'Email from Localhost by CodexWorld';
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
    
    public function helper(){
                $bodyContent =  "APPPATH.third_party/PHPMailer-master/PHPMailerAutoload.php";
                $val = 'assets/support/images/merry.jpg';
        if(!email_send('rajat.guptak2@gmail.com','rajat.guptakr2@gmail.com','Welcome To Website','Welcome To Website','Shweta','assets/support/images/merry.jpg ')){
            echo "No";
        }else{
            echo "Yes";
        }
    }
    
    public function lc(){
        
        $data['title'] = 'Litmus Zone : Users'; 
        layoutss($data);
    }

}
