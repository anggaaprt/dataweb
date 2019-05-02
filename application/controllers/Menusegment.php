<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menusegment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if (!isset($_SESSION['username'])) {
            redirect('login');
            die();
        }
        
        $this->load->library('dataweb');
    }
    
    public function cancel($menu) {
        redirect("menusegment/".$menu);
    }

    public function a(){
        redirect("menusegment/b");
    }

    public function b(){
        echo 'b';
    }
    
    public function menu1() {
        $menu = 'menu1';
        $data =array(
            'menu'      => $menu,
            'segment1'  => 'segment1',
            'segment2'  => 'segment2',
            'segment3'  => 'segment3',
            'segment4'  => 'segment4',
            'segment5'  => 'segment5',
            'segment6'  => 'segment6',
            'segment7'  => 'segment7',
            'segment8'  => 'segment8',
        );
        
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/'.$data['menu'];
        $data['js'] = 'dataweb/js';
        $data['title'] = 'Home';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment1' order by id desc";
        $data['sql_menu1_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment2' order by id desc";
        $data['sql_menu1_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment3' order by id desc";
        $data['sql_menu1_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment4' order by id desc";
        $data['sql_menu1_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $q5 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment5' order by id desc";
        $data['sql_menu1_segment5'] = $this->Data_model->jalankanQuery($q5, 3);
        $q6 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment6' order by id desc";
        $data['sql_menu1_segment6'] = $this->Data_model->jalankanQuery($q6, 3);
        $q7 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment7' order by id desc";
        $data['sql_menu1_segment7'] = $this->Data_model->jalankanQuery($q7, 3);
        $q8 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment8' order by id desc";
        $data['sql_menu1_segment8'] = $this->Data_model->jalankanQuery($q8, 3);
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu2() {
        $menu = 'menu2';
        $data =array(
            'menu'      => $menu,
            'segment1'  => 'segment1',
            'segment2'  => 'segment2',
            'segment3'  => 'segment3',
            'segment4'  => 'segment4',
            'segment5'  => 'segment5',
            'segment6'  => 'segment6',
            'segment7'  => 'segment7',
        );
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/'.$data['menu'];
        $data['js'] = 'dataweb/js';
        $data['title'] = 'About';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment1' order by id desc";
        $data['sql_menu2_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment2' order by id desc";
        $data['sql_menu2_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment3' order by id desc";
        $data['sql_menu2_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment4' order by id asc";
        $data['sql_menu2_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $q5 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment5' order by id desc";
        $data['sql_menu2_segment5'] = $this->Data_model->jalankanQuery($q5, 3);
        $q6 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment6' order by id asc";
        $data['sql_menu2_segment6'] = $this->Data_model->jalankanQuery($q6, 3);
        $q7 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment7' order by id asc";
        $data['sql_menu2_segment7'] = $this->Data_model->jalankanQuery($q7, 3);
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu3() {
        $menu = 'menu3';
        $data =array(
            'menu'      => $menu,
            'segment1'  => 'segment1',
            'segment2'  => 'segment2',
            'segment3'  => 'segment3',
            'segment4'  => 'segment4',
        );
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/'.$data['menu'];
        $data['js'] = 'dataweb/js';
        $data['title'] = 'Gallery';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment1' order by id desc";
        $data['sql_menu3_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment2' order by id desc";
        $data['sql_menu3_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment3' order by id desc";
        $data['sql_menu3_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment4' order by id asc";
        $data['sql_menu3_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu4() {
        $menu = 'menu4';
        $data =array(
            'menu'      => $menu,
            'segment1'  => 'segment1',
            'segment2'  => 'segment2',
            'segment3'  => 'segment3',
        );
        
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/'.$data['menu'];
        $data['js'] = 'dataweb/js';
        $data['title'] = 'Product';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment1' order by id desc";
        $data['sql_menu4_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment2' order by id desc";
        $data['sql_menu4_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment3' order by id desc";
        $data['sql_menu4_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu7() {
        $menu = 'menu7';
        $data =array(
            'menu'      => $menu,
            'segment1'  => 'segment1',
        );
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/'.$data['menu'];
        $data['js'] = 'dataweb/js';
        $data['title'] = 'Testimony';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu7_segment1' order by id desc";
        $data['sql_menu7_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $this->load->view('dataweb/index', $data);
    }
    
//    ---------------------------------------------------------------------------------------------------------------------------
    
    public function exampletesty() {
        $menu = 'menu7';
        $data =array(
            'menu'      => $menu,
            'frm_segment'  => 'menu7_segment1',
        );
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/testy';
        $data['js'] = 'dataweb/js';
        $data['title'] = 'example testimony';
        
        $config_captcha = array(
            'img_path'  => './captcha/',
            'img_url'  => base_url().'captcha/',
            'img_width'  => '200',
            'img_height' => 70,
            'border' => 0, 
            'expiration' => 7200
           );

           // create captcha image
        $cap = create_captcha($config_captcha);

           // store image html code in a variable
        $data['img'] = $cap['image'];

           // store the captcha word in a session
        $this->session->set_userdata('mycaptcha', $cap['word']);
        $this->load->view('dataweb/index', $data);
    }
    
    public function examplemail() {
        $menu = 'mail';
        $data =array(
            'menu'      => $menu,
            'frm_segment'  => 'menu7_segment1',
        );
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/mail';
        $data['js'] = 'dataweb/js';
        $data['title'] = 'example testimony';
        $this->load->view('dataweb/index', $data);
    }
    

}
