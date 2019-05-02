<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Email extends CI_Controller {
 
    function __construct() {
        parent::__construct();
//            jika belum login redirect ke login
//        if ($this->session->userdata('logged') <> 1) {
//            redirect(site_url('auth'));
//        }
    }
    
    function sendMail3() {
        $q = "SELECT * FROM tbl_pendaftaran where id = 1";
        $list1= $this->Data_model->jalankanQuery($q, 3);
        $data = array(
            "email_perusahaan" => $list1[0]->email_perusahaan,
        );
        
        $name = $this->input->post('name');
        $subject= $this->input->post('subject');
        $message = $this->input->post('message');
        $youremail = $this->input->post('youremail');
        $pass = $this->input->post('pass');
        
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_crypto'] = "ssl";
        $config['smtp_host'] = "smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = $youremail;
        $config['smtp_pass'] = $pass;
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from($youremail, $name);
        $list = array($data['email_perusahaan']);
        $ci->email->to($list);
        $ci->email->subject($subject);
        $ci->email->message($message);
        if ($this->email->send()) {
           echo 'Email Send';
        } else {
           echo 'Send Email Not Valid'.'<Br>';
           echo '<a href="https://myaccount.google.com/lesssecureapps">https://myaccount.google.com/lesssecureapps</a>';
        }
    }
    
    function sendMail2() {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_crypto'] = "ssl";
        $config['smtp_host'] = "smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "iman324324@gmail.com";
        $config['smtp_pass'] = "bandung1994";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('iman324324@gmail.com', 'Your Name');
        $list = array('soundata0@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('Tah Email');
        $ci->email->message('malam');
        if ($this->email->send()) {
           echo 'Email Send';
        } else {
            show_error($this->email->print_debugger());
        }
    }
 
}