<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Data_model');
    }

     public function index() { 
        $data['tujuan'] = 'template_5/home';
        $data['title'] = '.:: DataBisnis ::.';
        $data['menu'] = 'Home';
        
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

        $q8 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment8' order by id asc";
        $data['sql_menu1_segment8'] = $this->Data_model->jalankanQuery($q8, 3);
        $this->load->view('template_5/index', $data);
    }
    
    
     public function about() {

        $data['tujuan'] = 'template_5/about';
        $data['title'] = '.:: DataBisnis ::.';
        $data['menu'] = 'About';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment1' order by id desc";
        $data['sql_menu2_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment2' order by id desc";
        $data['sql_menu2_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment3' order by id asc";
        $data['sql_menu2_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment4' order by id desc";
        $data['sql_menu2_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $q5 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment5' order by id asc";
        $data['sql_menu2_segment5'] = $this->Data_model->jalankanQuery($q5, 3);
        $q6 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment6' order by id asc";
        $data['sql_menu2_segment6'] = $this->Data_model->jalankanQuery($q6, 3);
        $q7 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment7' order by id asc";
        $data['sql_menu2_segment7'] = $this->Data_model->jalankanQuery($q7, 3);
        $this->load->view('template_5/index', $data);
     }

public function gallery() {

        $data['tujuan'] = 'template_5/gallery';
        $data['title'] = '.:: DataBisnis ::.';
        $data['menu'] = 'Gallery';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment1' order by id asc";
        $data['sql_menu3_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment2' order by id desc";
        $data['sql_menu3_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment3' order by id asc";
        $data['sql_menu3_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu3_segment4' order by id asc";
        $data['sql_menu3_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $this->load->view('template_5/index', $data);
    
    }

public function product() {

        $data['tujuan'] = 'template_5/product';
        $data['title'] = '.:: DataBisnis ::.';
        $data['menu'] = 'Product';
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment1' order by id asc";
        $data['sql_menu4_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment2' order by id desc";
        $data['sql_menu4_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu4_segment3' order by id desc";
        $data['sql_menu4_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $this->load->view('template_5/index', $data);
        }



}
