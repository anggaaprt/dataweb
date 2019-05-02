<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capt extends CI_Controller {
  
  function __construct() {
   parent::__construct();
   
   // load library dan helper
   $this->load->library('session');
   $this->load->helper(array('captcha','url','form'));
  }
  
    
    function testy() {
    $secutity_code = $this->input->post('secutity_code');
    $mycaptcha = $this->session->userdata('mycaptcha');

    if ($this->input->post() && ($secutity_code == $mycaptcha)) {
        // pesan akan muncul jika captcha benar
        ini_set('date.timezone', 'Asia/Jakarta');
        $tgl= date('Y-m-d');
        
        $data_insert = array(
            'judul' => $this->input->post('judul'),
            'sub_judul' => $this->input->post('sub_judul'),
            'content' => $this->input->post('content'),
            'tgl' => $tgl,
            'form_name' => $this->input->post('form_name'),
        );
        
        $this->Data_model->simpanData($data_insert, 'tbl_content');
        $this->session->set_flashdata('success', '<br><center>Content successfully saved</center>');
        redirect('menusegment/exampletesty');
    } else {
        // pesan akan muncul jika captcha salah
        $this->session->set_flashdata('notif','<p style="color:red;"><b>Captcha salah :( </b></p>');
        redirect('menusegment/exampletesty');
    }
        
    }
    
    function send() {
    $secutity_code = $this->input->post('secutity_code');
    $mycaptcha = $this->session->userdata('mycaptcha');
//        echo $mycaptcha;
        if ($this->input->post() && ($secutity_code == $mycaptcha)) {
            // pesan akan muncul jika captcha benar
            ini_set('date.timezone', 'Asia/Jakarta');
            $tgl= date('Y-m-d');

            $data_insert = array(
                'judul' => $this->input->post('judul'),
                'sub_judul' => $this->input->post('sub_judul'),
                'content' => $this->input->post('content'),
                'tgl' => $tgl,
                'form_name' => $this->input->post('form_name'),
            );

            $this->Data_model->simpanData($data_insert, 'tbl_content');
            $this->session->set_flashdata('notif','<p style="color:green;"><b>Testimony successfully sent :) </b></p>');
            redirect('temphome/testimony');
        } else {
            // pesan akan muncul jika captcha salah
            $this->session->set_flashdata('notif','<p style="color:red;"><b>Captcha salah :( </b></p>');
            redirect('temphome/testimony');
        }
    }
    
    public function refresh(){
		// Captcha configuration
		$config = array(
            'word_length' => 6,
            'img_path'  => './captcha/',
            'img_url'  => base_url().'captcha/',
            'img_width'  => '200',
            'img_height' => 70,
            'border' => 0, 
            'expiration' => 7200
		);
		$captcha = create_captcha($config);
		
		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		// Display captcha image
		echo $captcha['image'];
        
        $this->session->set_userdata('mycaptcha', $captcha['word']);
	}
    
    public function save() {
        $menu=$this->input->post('menu');
        $status=$this->input->post('status');
        $menu_segment=$this->input->post('form_name');
        if ($status != 1){
            $s=0;
        }else{
            $s=1;
        }
        
        $data_insert = array(
            'judul' => $this->input->post('judul'),
            'creator' => $this->input->post('creator'),
            'tgl' => $this->input->post('tgl'),
            'url' => $this->input->post('url1'),
            'url2' => $this->input->post('url2'),
            'url3' => $this->input->post('url3'),
            'sub_judul' => $this->input->post('sub_judul'),
            'rangkuman' => $this->input->post('rangkuman'),
            'content' => $this->input->post('content'),
            'tb_cl1' => $this->input->post('tb_cl1'),
            'tb_cl2' => $this->input->post('tb_cl2'),
            'tb_cl3' => $this->input->post('tb_cl3'),
            'tb_cl4' => $this->input->post('tb_cl4'),
            'tb_cl5' => $this->input->post('tb_cl5'),
            'tb_cl6' => $this->input->post('tb_cl6'),
            'tb_cl7' => $this->input->post('tb_cl7'),
            'form_name' => $this->input->post('form_name'),
            'status' => $s,
        );
        
        $this->Data_model->simpanData($data_insert, 'tbl_content');
        $this->session->set_flashdata('success', '<br><center>Content successfully saved</center>');
        redirect("menu/add/".$menu_segment."/".$menu);
    }  
 }