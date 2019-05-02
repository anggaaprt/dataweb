<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if (!isset($_SESSION['username'])) {
            redirect('login');
            die();
        }
    }
    
    
    public function menu() {
        $data['menu'] = '';
        $data['title'] = 'Menu Create';
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/menu';
        $data['js'] = 'dataweb/js';
        $data['tittle'] = 'Menu Create';
        $q = "SELECT * FROM t_menu order by form_name desc";
        $data['menu_segment'] = $this->Data_model->jalankanQuery($q, 3);
        $this->load->view('dataweb/index', $data);
    }
    
    public function create() {
        $data = array(
            "form_name" => '',
            "judul" => '',
            "sub_judul" => '',
            "rangkuman" => '',
            "content" => '',
            "images1" => '',
            "images2" => '',
            "images3" => '',
            "images4" => '',
            "images5" => '',
            "images6" => '',
            "tgl" => '',
            "creator" => '',
            "url1" => '',
            "url2" => '',
            "url3" => '',
            "tb_cl1" => '',
            "tb_cl2" => '',
            "tb_cl3" => '',
            "tb_cl4" => '',
            "tb_cl5" => '',
            "tb_cl6" => '',
            "tb_cl7" => '',
            "status" => '',
            "id" => '',
            
//          txtblock
            "txt_block_title"   => 'none',
            "txt_block_creator"=> 'none',
            "txt_block_sub_judul"=> 'none',
            "txt_block_summary"=> 'none',
            "txt_block_content"=> 'none',
            "txt_block_image1"=> 'none',
            "txt_block_image2"=> 'none',
            "txt_block_image3"=> 'none',
            "txt_block_image4"=> 'none',
            "txt_block_image5"=> 'none',
            "txt_block_image6"=> 'none',
            "txt_block_date"=> 'none',
            "txt_block_url1"=> 'none',
            "txt_block_url2"=> 'none',
            "txt_block_url3"=> 'none',
            "txt_block_tb_cl1"=> 'none',
            "txt_block_tb_cl2"=> 'none',
            "txt_block_tb_cl3"=> 'none',
            "txt_block_tb_cl4"=> 'none',
            "txt_block_tb_cl5"=> 'none',
            "txt_block_tb_cl6"=> 'none',
            "txt_block_tb_cl7"=> 'none',
            "txt_block_status"=> 'none',
            
//          txt
            "txt_title" => 'Title',
            "txt_creator" => 'Creator',
            "txt_sub_judul" => 'Title Page',
            "txt_summary" => 'Summary',
            "txt_content" => 'Content',
            "txt_image1" => 'Images 1',
            "txt_image2" => 'Images 2',
            "txt_image3" => 'Images 3',
            "txt_image4" => 'Images 4',
            "txt_image5" => 'Images 5',
            "txt_image6" => 'Images 6',
            "txt_date" => 'Date',
            "txt_url1" => 'Url 1',
            "txt_url2" => 'Url 2',
            "txt_url3" => 'Url 3',
            "txt_tb_cl1" => 'tb_cl1',
            "txt_tb_cl2" => 'tb_cl2',
            "txt_tb_cl3" => 'tb_cl3',
            "txt_tb_cl4" => 'tb_cl4',
            "txt_tb_cl5" => 'tb_cl5',
            "txt_tb_cl6" => 'tb_cl6',
            "txt_tb_cl7" => 'tb_cl7',
            "txt_status" => 'Show Content',
            
        ); 
        
        $data['menu'] = '';
        $data['aksi'] = 'create';
        $data['title'] = 'Menu 1';
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/menu_create';
        $data['js'] = 'dataweb/js';
        $data['tittle'] = 'MENU';
        
        $data['creator']='----- Unshow -----';
        $data['val']='0';
        $data['un']='';
        $q = "SELECT * FROM t_menu order by form_name asc";
        $data['menu_segment'] = $this->Data_model->jalankanQuery($q, 3);
        
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu_edit($id) {
        $q = "SELECT * FROM t_menu where id = '$id'";
        $list = $this->Data_model->jalankanQuery($q, 3);

        $data = array(
            "form_name" => isset ($list[0]->form_name) ? $list[0]->form_name : '',
            "judul"   => $list[0]->title == 1 ? 'checked' : '',
            "sub_judul"   => $list[0]->sub_judul == 1 ? 'checked' : '',
            "rangkuman"   => $list[0]->rangkuman == 1 ? 'checked' : '',
            "content" => $list[0]->content == 1 ? 'checked' : '',
            "images1" => $list[0]->images1 == 1 ? 'checked' : '',
            "images2" => $list[0]->images2 == 1 ? 'checked' : '',
            "images3" => $list[0]->images3 == 1 ? 'checked' : '',
            "images4" => $list[0]->images4 == 1 ? 'checked' : '',
            "images5" => $list[0]->images5 == 1 ? 'checked' : '',
            "images6" => $list[0]->images6 == 1 ? 'checked' : '',
            "tgl"     => $list[0]->tgl == 1 ? 'checked' : '',
            "creator" => isset ($list[0]->creator) ? $list[0]->creator : '',
            "url1"    => $list[0]->url1 == 1 ? 'checked' : '',
            "url2"    => $list[0]->url2 == 1 ? 'checked' : '',
            "url3"    => $list[0]->url3 == 1 ? 'checked' : '',
            "tb_cl1"    => $list[0]->tb_cl1 == 1 ? 'checked' : '',
            "tb_cl2"    => $list[0]->tb_cl2 == 1 ? 'checked' : '',
            "tb_cl3"    => $list[0]->tb_cl3 == 1 ? 'checked' : '',
            "tb_cl4"    => $list[0]->tb_cl4 == 1 ? 'checked' : '',
            "tb_cl5"    => $list[0]->tb_cl5 == 1 ? 'checked' : '',
            "tb_cl6"    => $list[0]->tb_cl6 == 1 ? 'checked' : '',
            "tb_cl7"    => $list[0]->tb_cl7 == 1 ? 'checked' : '',
            "status"  => $list[0]->status == 1 ? 'checked' : '',
            "id"      => $id,
            
//          txtblock
            "txt_block_title"   => $list[0]->title == 1 ? 'block' : 'none',
            "txt_block_creator"=> $list[0]->creator > 0 ? 'block' : 'none',
            "txt_block_sub_judul"=> $list[0]->sub_judul == 1 ? 'block' : 'none',
            "txt_block_summary"=> $list[0]->rangkuman == 1 ? 'block' : 'none',
            "txt_block_content"=> $list[0]->content == 1 ? 'block' : 'none',
            "txt_block_image1"=> $list[0]->images1 == 1 ? 'block' : 'none',
            "txt_block_image2"=> $list[0]->images2 == 1 ? 'block' : 'none',
            "txt_block_image3"=> $list[0]->images3 == 1 ? 'block' : 'none',
            "txt_block_image4"=> $list[0]->images4 == 1 ? 'block' : 'none',
            "txt_block_image5"=> $list[0]->images5 == 1 ? 'block' : 'none',
            "txt_block_image6"=> $list[0]->images6 == 1 ? 'block' : 'none',
            "txt_block_date"=> $list[0]->tgl == 1 ? 'block' : 'none',
            "txt_block_url1"=> $list[0]->url1 == 1 ? 'block' : 'none',
            "txt_block_url2"=> $list[0]->url2 == 1 ? 'block' : 'none',
            "txt_block_url3"=> $list[0]->url3 == 1 ? 'block' : 'none',
            "txt_block_tb_cl1"=> $list[0]->tb_cl1 == 1 ? 'block' : 'none',
            "txt_block_tb_cl2"=> $list[0]->tb_cl2 == 1 ? 'block' : 'none',
            "txt_block_tb_cl3"=> $list[0]->tb_cl3 == 1 ? 'block' : 'none',
            "txt_block_tb_cl4"=> $list[0]->tb_cl4 == 1 ? 'block' : 'none',
            "txt_block_tb_cl5"=> $list[0]->tb_cl5 == 1 ? 'block' : 'none',
            "txt_block_tb_cl6"=> $list[0]->tb_cl6 == 1 ? 'block' : 'none',
            "txt_block_tb_cl7"=> $list[0]->tb_cl7 == 1 ? 'block' : 'none',
            "txt_block_status"=> $list[0]->status == 1 ? 'block' : 'none',
            
//          txt
            "txt_title" => $list[0]->txt_title,
            "txt_creator" => $list[0]->txt_creator,
            "txt_sub_judul" => $list[0]->txt_sub_judul,
            "txt_summary" => $list[0]->txt_rangkuman,
            "txt_content" => $list[0]->txt_content,
            "txt_image1" => $list[0]->txt_images1,
            "txt_image2" => $list[0]->txt_images2,
            "txt_image3" => $list[0]->txt_images3,
            "txt_image4" => $list[0]->txt_images4,
            "txt_image5" => $list[0]->txt_images5,
            "txt_image6" => $list[0]->txt_images6,
            "txt_date" => $list[0]->txt_tgl,
            "txt_url1" => $list[0]->txt_url1,
            "txt_url2" => $list[0]->txt_url2,
            "txt_url3" => $list[0]->txt_url3,
            "txt_tb_cl1" => $list[0]->txt_tb_cl1,
            "txt_tb_cl2" => $list[0]->txt_tb_cl2,
            "txt_tb_cl3" => $list[0]->txt_tb_cl3,
            "txt_tb_cl4" => $list[0]->txt_tb_cl4,
            "txt_tb_cl5" => $list[0]->txt_tb_cl5,
            "txt_tb_cl6" => $list[0]->txt_tb_cl6,
            "txt_tb_cl7" => $list[0]->txt_tb_cl7,
            "txt_status" => $list[0]->txt_status,
        ); 
        
        $data['menu'] = '';
        $data['aksi'] = 'edit';
        $data['title'] = 'Menu 1';
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/menu_create';
        $data['js'] = 'dataweb/js';
        $data['tittle'] = 'MENU';
        
        $ccreator=$data['creator'];
        if (($ccreator == 0)||($ccreator == '')){
            $data['creator']='----- Unshow -----';
            $data['val']='0';
            $data['un']='';
        } else {
            $q2 = "SELECT * FROM t_menu where id = '$ccreator'";
            $creator = $this->Data_model->jalankanQuery($q2, 3);
            $data['creator']=$creator[0]->form_name;
            $data['val']=$creator[0]->id;
            $data['un']='<option hidden="hidden" value="0">----- Unshow -----</option>';
        }
        $form_name1= $data['creator'];
        $form_name2=$data['form_name'];
        $q1 = "SELECT * FROM t_menu where form_name <> '$form_name1' and form_name <> '$form_name2' order by form_name asc";
        $data['menu_segment'] = $this->Data_model->jalankanQuery($q1, 3);
        
        $this->load->view('dataweb/index', $data);
    }
    
    public function menu_save() {
        $title   =$this->input->post('title');
        $sub_judul=$this->input->post('sub_judul');
        $rangkuman=$this->input->post('rangkuman');
        $content =$this->input->post('content');
        $images1 =$this->input->post('images1');
        $images2 =$this->input->post('images2');
        $images3 =$this->input->post('images3');
        $images4 =$this->input->post('images4');
        $images5 =$this->input->post('images5');
        $images6 =$this->input->post('images6');
        $tgl     =$this->input->post('tgl');
        $url1    =$this->input->post('url1');
        $url2    =$this->input->post('url2');
        $url3    =$this->input->post('url3');
        $tb_cl1  =$this->input->post('tb_cl1');
        $tb_cl2  =$this->input->post('tb_cl2');
        $tb_cl3  =$this->input->post('tb_cl3');
        $tb_cl4  =$this->input->post('tb_cl4');
        $tb_cl5  =$this->input->post('tb_cl5');
        $tb_cl6  =$this->input->post('tb_cl6');
        $tb_cl7  =$this->input->post('tb_cl7');
        $status  =$this->input->post('status');
        
        $title   !=1 ? $ctitle=0   : $ctitle=1;
        $sub_judul!=1 ? $csub_judul=0 : $csub_judul=1;
        $rangkuman!=1 ? $crangkuman=0 : $crangkuman=1;
        $content !=1 ? $ccontent=0 : $ccontent=1;
        $images1 !=1 ? $cimages1=0 : $cimages1=1;
        $images2 !=1 ? $cimages2=0 : $cimages2=1;
        $images3 !=1 ? $cimages3=0 : $cimages3=1;
        $images4 !=1 ? $cimages4=0 : $cimages4=1;
        $images5 !=1 ? $cimages5=0 : $cimages5=1;
        $images6 !=1 ? $cimages6=0 : $cimages6=1;
        $tgl     !=1 ? $ctgl=0 : $ctgl=1;
        $url1    !=1 ? $curl1=0 : $curl1=1;
        $url2    !=1 ? $curl2=0 : $curl2=1;
        $url3    !=1 ? $curl3=0 : $curl3=1;
        $tb_cl1  !=1 ? $ctb_cl1=0 : $ctb_cl1=1;
        $tb_cl2  !=1 ? $ctb_cl2=0 : $ctb_cl2=1;
        $tb_cl3  !=1 ? $ctb_cl3=0 : $ctb_cl3=1;
        $tb_cl4  !=1 ? $ctb_cl4=0 : $ctb_cl4=1;
        $tb_cl5  !=1 ? $ctb_cl5=0 : $ctb_cl5=1;
        $tb_cl6  !=1 ? $ctb_cl6=0 : $ctb_cl6=1;
        $tb_cl7  !=1 ? $ctb_cl7=0 : $ctb_cl7=1;
        $status  !=1 ? $cstatus=0  : $cstatus=1;
        
        $data_insert = array(
            'form_name' => $this->input->post('form_name'),
            'title'   => $ctitle,
            'creator' => $this->input->post('creator'),
            'sub_judul' => $csub_judul,
            'rangkuman' => $crangkuman,
            'content' => $ccontent,
            'images1' => $cimages1,
            'images2' => $cimages2,
            'images3' => $cimages3,
            'images4' => $cimages4,
            'images5' => $cimages5,
            'images6' => $cimages6,
            'tgl'     => $ctgl,
            'url1'    => $curl1,
            'url2'    => $curl2,
            'url3'    => $curl3,
            'tb_cl1'    => $ctb_cl1,
            'tb_cl2'    => $ctb_cl2,
            'tb_cl3'    => $ctb_cl3,
            'tb_cl4'    => $ctb_cl4,
            'tb_cl5'    => $ctb_cl5,
            'tb_cl6'    => $ctb_cl6,
            'tb_cl7'    => $ctb_cl7,
            'status'  => $cstatus,
            
//          txt
            'txt_title' =>$this->input->post('txt_title'),
            'txt_creator' =>$this->input->post('txt_creator'),
            'txt_sub_judul' =>$this->input->post('txt_sub_judul'),
            'txt_rangkuman' =>$this->input->post('txt_rangkuman'),
            'txt_content' =>$this->input->post('txt_content'),
            'txt_images1' =>$this->input->post('txt_image1'),
            'txt_images2' =>$this->input->post('txt_image2'),
            'txt_images3' =>$this->input->post('txt_image3'),
            'txt_images4' =>$this->input->post('txt_image4'),
            'txt_images5' =>$this->input->post('txt_image5'),
            'txt_images6' =>$this->input->post('txt_image6'),
            'txt_tgl' =>$this->input->post('txt_tgl'),
            'txt_url1' =>$this->input->post('txt_url1'),
            'txt_url2' =>$this->input->post('txt_url2'),
            'txt_url3' =>$this->input->post('txt_url3'),
            'txt_tb_cl1' =>$this->input->post('txt_tb_cl1'),
            'txt_tb_cl2' =>$this->input->post('txt_tb_cl2'),
            'txt_tb_cl3' =>$this->input->post('txt_tb_cl3'),
            'txt_tb_cl4' =>$this->input->post('txt_tb_cl4'),
            'txt_tb_cl5' =>$this->input->post('txt_tb_cl5'),
            'txt_tb_cl6' =>$this->input->post('txt_tb_cl6'),
            'txt_tb_cl7' =>$this->input->post('txt_tb_cl7'),
            'txt_status' =>$this->input->post('txt_status'),
            
        );
        
        $this->Data_model->simpanData($data_insert, 't_menu');
        
            
        redirect("menu/menu");
    }
    
    public function menu_update() {
        $id = $this->input->post('id');
        $title   =$this->input->post('title');
        $sub_judul=$this->input->post('sub_judul');
        $rangkuman=$this->input->post('rangkuman');
        $content =$this->input->post('content');
        $images1 =$this->input->post('images1');
        $images2 =$this->input->post('images2');
        $images3 =$this->input->post('images3');
        $images4 =$this->input->post('images4');
        $images5 =$this->input->post('images5');
        $images6 =$this->input->post('images6');
        $tgl     =$this->input->post('tgl');
        $url1    =$this->input->post('url1');
        $url2    =$this->input->post('url2');
        $url3    =$this->input->post('url3');
        $tb_cl1  =$this->input->post('tb_cl1');
        $tb_cl2  =$this->input->post('tb_cl2');
        $tb_cl3  =$this->input->post('tb_cl3');
        $tb_cl4  =$this->input->post('tb_cl4');
        $tb_cl5  =$this->input->post('tb_cl5');
        $tb_cl6  =$this->input->post('tb_cl6');
        $tb_cl7  =$this->input->post('tb_cl7');
        $status  =$this->input->post('status');
        
        $title   !=1 ? $ctitle=0   : $ctitle=1;
        $sub_judul!=1 ? $csub_judul=0 : $csub_judul=1;
        $rangkuman!=1 ? $crangkuman=0 : $crangkuman=1;
        $content !=1 ? $ccontent=0 : $ccontent=1;
        $images1 !=1 ? $cimages1=0 : $cimages1=1;
        $images2 !=1 ? $cimages2=0 : $cimages2=1;
        $images3 !=1 ? $cimages3=0 : $cimages3=1;
        $images4 !=1 ? $cimages4=0 : $cimages4=1;
        $images5 !=1 ? $cimages5=0 : $cimages5=1;
        $images6 !=1 ? $cimages6=0 : $cimages6=1;
        $tgl     !=1 ? $ctgl=0 : $ctgl=1;
        $url1    !=1 ? $curl1=0 : $curl1=1;
        $url2    !=1 ? $curl2=0 : $curl2=1;
        $url3    !=1 ? $curl3=0 : $curl3=1;
        $tb_cl1  !=1 ? $ctb_cl1=0 : $ctb_cl1=1;
        $tb_cl2  !=1 ? $ctb_cl2=0 : $ctb_cl2=1;
        $tb_cl3  !=1 ? $ctb_cl3=0 : $ctb_cl3=1;
        $tb_cl4  !=1 ? $ctb_cl4=0 : $ctb_cl4=1;
        $tb_cl5  !=1 ? $ctb_cl5=0 : $ctb_cl5=1;
        $tb_cl6  !=1 ? $ctb_cl6=0 : $ctb_cl6=1;
        $tb_cl7  !=1 ? $ctb_cl7=0 : $ctb_cl7=1;
        $status  !=1 ? $cstatus=0  : $cstatus=1;
        
        $data_insert = array(
            'form_name' => $this->input->post('form_name'),
            
            'title' => $ctitle,
            'txt_title' =>$this->input->post('txt_title'),
            
            'sub_judul' => $csub_judul,
            'rangkuman' => $crangkuman,
            'content' => $ccontent,
            'images1' => $cimages1,
            'images2' => $cimages2,
            'images3' => $cimages3,
            'images4' => $cimages4,
            'images5' => $cimages5,
            'images6' => $cimages6,
            'tgl'     => $ctgl,
            'creator' => $this->input->post('creator'),
            'url1'    => $curl1,
            'url2'    => $curl2,
            'url3'    => $curl3,
            'tb_cl1'    => $ctb_cl1,
            'tb_cl2'    => $ctb_cl2,
            'tb_cl3'    => $ctb_cl3,
            'tb_cl4'    => $ctb_cl4,
            'tb_cl5'    => $ctb_cl5,
            'tb_cl6'    => $ctb_cl6,
            'tb_cl7'    => $ctb_cl7,
            'status' => $cstatus,
            
//          txt
            'txt_title' =>$this->input->post('txt_title'),
            'txt_creator' =>$this->input->post('txt_creator'),
            'txt_sub_judul' =>$this->input->post('txt_sub_judul'),
            'txt_rangkuman' =>$this->input->post('txt_rangkuman'),
            'txt_content' =>$this->input->post('txt_content'),
            'txt_images1' =>$this->input->post('txt_image1'),
            'txt_images2' =>$this->input->post('txt_image2'),
            'txt_images3' =>$this->input->post('txt_image3'),
            'txt_images4' =>$this->input->post('txt_image4'),
            'txt_images5' =>$this->input->post('txt_image5'),
            'txt_images6' =>$this->input->post('txt_image6'),
            'txt_tgl' =>$this->input->post('txt_tgl'),
            'txt_url1' =>$this->input->post('txt_url1'),
            'txt_url2' =>$this->input->post('txt_url2'),
            'txt_url3' =>$this->input->post('txt_url3'),
            'txt_tb_cl1' =>$this->input->post('txt_tb_cl1'),
            'txt_tb_cl2' =>$this->input->post('txt_tb_cl2'),
            'txt_tb_cl3' =>$this->input->post('txt_tb_cl3'),
            'txt_tb_cl4' =>$this->input->post('txt_tb_cl4'),
            'txt_tb_cl5' =>$this->input->post('txt_tb_cl5'),
            'txt_tb_cl6' =>$this->input->post('txt_tb_cl6'),
            'txt_tb_cl7' =>$this->input->post('txt_tb_cl7'),
            'txt_status' =>$this->input->post('txt_status'),
        );
        $where = array('id' => $id);
        
        $this->Data_model->updateDataWhere($data_insert,'t_menu',$where);

        redirect("menu/menu");
    }
    
    public function menu_delete() {
        $hapus = $_POST['hapus'];
        $where = array('id' => $hapus);
        $res = $this->Data_model->hapusDataWhere('t_menu', $where);
        redirect("menu/menu");
    }
    
//    ---------------------------------------------------------------------------------------------
    
    public function add($form_name, $menu) {
        
        $q = "SELECT * FROM t_menu where form_name = '$form_name'";
        $list1 = $this->Data_model->jalankanQuery($q, 3);
        $cekfrm = $this->db->query("SELECT * FROM t_menu where form_name = '$form_name'");
        if ($cekfrm->num_rows() > 0)
        {
        $data = array(
            "form_name" => isset ($list[0]->form_name) ? $list[0]->form_name : '',
//            hidden
            "hjudul" => $list1[0]->title == 1 ? '' : 'hidden',
            "hcreator" => $list1[0]->creator >= 1 ? '' : 'hidden',
            "hdate"    => $list1[0]->tgl     == 1 ? '' : 'hidden',
            "hurl1"    => $list1[0]->url1    == 1 ? '' : 'hidden',
            "hurl2"    => $list1[0]->url2    == 1 ? '' : 'hidden',
            "hurl3"    => $list1[0]->url3    == 1 ? '' : 'hidden',
            "hsub_judul"=> $list1[0]->sub_judul== 1 ? '' : 'hidden',
            "hrangkuman"=> $list1[0]->rangkuman== 1 ? '' : 'hidden',
            "hcontent" => $list1[0]->content == 1 ? '' : 'hidden',
            "himages1" => $list1[0]->images1 == 1 ? '' : 'hidden',
            "himages2" => $list1[0]->images2 == 1 ? '' : 'hidden',
            "himages3" => $list1[0]->images3 == 1 ? '' : 'hidden',
            "himages4" => $list1[0]->images4 == 1 ? '' : 'hidden',
            "himages5" => $list1[0]->images5 == 1 ? '' : 'hidden',
            "himages6" => $list1[0]->images6 == 1 ? '' : 'hidden',
            "htb_cl1" => $list1[0]->tb_cl1 == 1 ? '' : 'hidden',
            "htb_cl2" => $list1[0]->tb_cl2 == 1 ? '' : 'hidden',
            "htb_cl3" => $list1[0]->tb_cl3 == 1 ? '' : 'hidden',
            "htb_cl4" => $list1[0]->tb_cl4 == 1 ? '' : 'hidden',
            "htb_cl5" => $list1[0]->tb_cl5 == 1 ? '' : 'hidden',
            "htb_cl6" => $list1[0]->tb_cl6 == 1 ? '' : 'hidden',
            "htb_cl7" => $list1[0]->tb_cl7 == 1 ? '' : 'hidden',
            "hstatus" => $list1[0]->status == 1 ? '' : 'hidden',
//            txt
            "txt_title" => $list1[0]->txt_title,
            "txt_creator" => $list1[0]->txt_creator,
            "txt_sub_judul" => $list1[0]->txt_sub_judul,
            "txt_summary" => $list1[0]->txt_rangkuman,
            "txt_content" => $list1[0]->txt_content,
            "txt_image1" => $list1[0]->txt_images1,
            "txt_image2" => $list1[0]->txt_images2,
            "txt_image3" => $list1[0]->txt_images3,
            "txt_image4" => $list1[0]->txt_images4,
            "txt_image5" => $list1[0]->txt_images5,
            "txt_image6" => $list1[0]->txt_images6,
            "txt_date" => $list1[0]->txt_tgl,
            "txt_url1" => $list1[0]->txt_url1,
            "txt_url2" => $list1[0]->txt_url2,
            "txt_url3" => $list1[0]->txt_url3,
            "txt_tb_cl1" => $list1[0]->txt_tb_cl1,
            "txt_tb_cl2" => $list1[0]->txt_tb_cl2,
            "txt_tb_cl3" => $list1[0]->txt_tb_cl3,
            "txt_tb_cl4" => $list1[0]->txt_tb_cl4,
            "txt_tb_cl5" => $list1[0]->txt_tb_cl5,
            "txt_tb_cl6" => $list1[0]->txt_tb_cl6,
            "txt_tb_cl7" => $list1[0]->txt_tb_cl7,
            "txt_status" => $list1[0]->txt_status,
//            form
            "id" => '',
            "judul" => '',
            "date" => '',
            "url1" => '',
            "url2" => '',
            "url3" => '',
            "sub_judul" => '',
            "rangkuman" => '',
            "content" => '',
            "images1" => '',
            "images2" => '',
            "images3" => '',
            "images4" => '',
            "images5" => '',
            "images6" => '',
            "tb_cl1"  => '',
            "tb_cl2"  => '',
            "tb_cl3"  => '',
            "tb_cl4"  => '',
            "tb_cl5"  => '',
            "tb_cl6"  => '',
            "tb_cl7"  => '',
            "form_name" => '',
            "status" => $list1[0]->status == 1 ? 'checked' : '',
        ); 
//        creator
        $creator=$list1[0]->creator;
        if ($creator > 0)
        {
            $qcreator = "SELECT * FROM t_menu where id = '$creator'";
            $caricreator = $this->Data_model->jalankanQuery($qcreator, 3);
            $creator=$caricreator[0]->form_name;  
            $creator;
            $data['required']='required';
            
        }else{
            $creator;
            $data['required']='';
        }
        $data['aksi'] = 'add';
        $data['menu'] = $menu;
        $data['css'] = 'dataweb/input/css';
        $data['tujuan'] = 'dataweb/input/input';
        $data['js'] = 'dataweb/input/js';
        $string_url = $this->uri->segment(5);
        $data['title'] = rawurldecode($string_url);
        $data['frm_segment'] = $form_name;
        
        $data['creator']='----- creator -----';
        $data['val']='';
        $data['un']='';
        $qcreator1 = "SELECT * FROM tbl_content where form_name = '$creator' order by id DESC";
        $data['sqlcreator'] = $this->Data_model->jalankanQuery($qcreator1, 3);
            
        $this->load->view('dataweb/index', $data);
        }else{
            echo "Form Name Belum di buat";
        }
    }
    
    public function edit($menu, $id) {
        $q = "SELECT * FROM tbl_content where id = '$id'";
        $list = $this->Data_model->jalankanQuery($q, 3);

        $data = array(
            "form_name" => isset ($list[0]->form_name) ? $list[0]->form_name : '',
        );
        
        $form_name=$data['form_name'];
        
        
        $q1 = "SELECT * FROM t_menu where form_name = '$form_name'";
        $list1 = $this->Data_model->jalankanQuery($q1, 3);
        $data = array(
//            txt
            "txt_title" => $list1[0]->txt_title,
            "txt_creator" => $list1[0]->txt_creator,
            "txt_sub_judul" => $list1[0]->txt_sub_judul,
            "txt_summary" => $list1[0]->txt_rangkuman,
            "txt_content" => $list1[0]->txt_content,
            "txt_image1" => $list1[0]->txt_images1,
            "txt_image2" => $list1[0]->txt_images2,
            "txt_image3" => $list1[0]->txt_images3,
            "txt_image4" => $list1[0]->txt_images4,
            "txt_image5" => $list1[0]->txt_images5,
            "txt_image6" => $list1[0]->txt_images6,
            "txt_date" => $list1[0]->txt_tgl,
            "txt_url1" => $list1[0]->txt_url1,
            "txt_url2" => $list1[0]->txt_url2,
            "txt_url3" => $list1[0]->txt_url3,
            "txt_tb_cl1" => $list1[0]->txt_tb_cl1,
            "txt_tb_cl2" => $list1[0]->txt_tb_cl2,
            "txt_tb_cl3" => $list1[0]->txt_tb_cl3,
            "txt_tb_cl4" => $list1[0]->txt_tb_cl4,
            "txt_tb_cl5" => $list1[0]->txt_tb_cl5,
            "txt_tb_cl6" => $list1[0]->txt_tb_cl6,
            "txt_tb_cl7" => $list1[0]->txt_tb_cl7,
            "txt_status" => $list1[0]->txt_status,
//            form
            "id" => $id,
            "judul" => isset ($list[0]->judul) ? $list[0]->judul : '',
            "date" => isset ($list[0]->tgl) ? $list[0]->tgl : '',
            "url1" => isset ($list[0]->url) ? $list[0]->url : '',
            "url2" => isset ($list[0]->url2) ? $list[0]->url2 : '',
            "url3" => isset ($list[0]->url3) ? $list[0]->url3 : '',
            "sub_judul"=> isset ($list[0]->sub_judul) ? $list[0]->sub_judul : '',
            "rangkuman"=> isset ($list[0]->rangkuman) ? $list[0]->rangkuman : '',
            "content" => isset ($list[0]->content) ? $list[0]->content : '',
            "images1" => isset ($list[0]->images) ? $list[0]->images : '',
            "images2" => isset ($list[0]->images2) ? $list[0]->images2 : '',
            "images3" => isset ($list[0]->images3) ? $list[0]->images3 : '',
            "images4" => isset ($list[0]->images4) ? $list[0]->images4 : '',
            "images5" => isset ($list[0]->images5) ? $list[0]->images5 : '',
            "images6" => isset ($list[0]->images6) ? $list[0]->images6 : '',
            "tb_cl1"  => isset ($list[0]->tb_cl1) ? $list[0]->tb_cl1 : '',
            "tb_cl2"  => isset ($list[0]->tb_cl2) ? $list[0]->tb_cl2 : '',
            "tb_cl3"  => isset ($list[0]->tb_cl3) ? $list[0]->tb_cl3 : '',
            "tb_cl4"  => isset ($list[0]->tb_cl4) ? $list[0]->tb_cl4 : '',
            "tb_cl5"  => isset ($list[0]->tb_cl5) ? $list[0]->tb_cl5 : '',
            "tb_cl6"  => isset ($list[0]->tb_cl6) ? $list[0]->tb_cl6 : '',
            "tb_cl7"  => isset ($list[0]->tb_cl7) ? $list[0]->tb_cl7 : '',
            "form_name" => isset ($list[0]->form_name) ? $list[0]->form_name : '',
            "status" => $list[0]->status == 1 ? 'checked' : '',
//            hidden
            "hjudul" => $list1[0]->title == 1 ? '' : 'hidden',
            "hcreator" => $list1[0]->creator >= 1 ? '' : 'hidden',
            "hdate"    => $list1[0]->tgl     == 1 ? '' : 'hidden',
            "hurl1"    => $list1[0]->url1    == 1 ? '' : 'hidden',
            "hurl2"    => $list1[0]->url2    == 1 ? '' : 'hidden',
            "hurl3"    => $list1[0]->url3    == 1 ? '' : 'hidden',
            "hsub_judul"=> $list1[0]->sub_judul== 1 ? '' : 'hidden',
            "hrangkuman"=> $list1[0]->rangkuman== 1 ? '' : 'hidden',
            "hcontent" => $list1[0]->content == 1 ? '' : 'hidden',
            "himages1" => $list1[0]->images1 == 1 ? '' : 'hidden',
            "himages2" => $list1[0]->images2 == 1 ? '' : 'hidden',
            "himages3" => $list1[0]->images3 == 1 ? '' : 'hidden',
            "himages4" => $list1[0]->images4 == 1 ? '' : 'hidden',
            "himages5" => $list1[0]->images5 == 1 ? '' : 'hidden',
            "himages6" => $list1[0]->images6 == 1 ? '' : 'hidden',
            "htb_cl1" => $list1[0]->tb_cl1 == 1 ? '' : 'hidden',
            "htb_cl2" => $list1[0]->tb_cl2 == 1 ? '' : 'hidden',
            "htb_cl3" => $list1[0]->tb_cl3 == 1 ? '' : 'hidden',
            "htb_cl4" => $list1[0]->tb_cl4 == 1 ? '' : 'hidden',
            "htb_cl5" => $list1[0]->tb_cl5 == 1 ? '' : 'hidden',
            "htb_cl6" => $list1[0]->tb_cl6 == 1 ? '' : 'hidden',
            "htb_cl7" => $list1[0]->tb_cl7 == 1 ? '' : 'hidden',
            "hstatus" => $list1[0]->status == 1 ? '' : 'hidden',
        ); 
//        creator
        $creator=$list1[0]->creator;
        if ($creator > 0)
        {
            $qcreator = "SELECT * FROM t_menu where id = '$creator'";
            $caricreator = $this->Data_model->jalankanQuery($qcreator, 3);
            $creator=$caricreator[0]->form_name;  
            $creator;
            $data['required']='required';
            
        }else{
            $creator;
            $data['required']='';
        }
        
        $data['aksi'] = 'edit';
        $data['menu'] = $menu;
        $data['css'] = 'dataweb/input/css';
        $data['tujuan'] = 'dataweb/input/input';
        $data['js'] = 'dataweb/input/js';
        $string_url = $this->uri->segment(5);
        $data['title'] = rawurldecode($string_url);
        $data['frm_segment'] = $form_name;
        
        
        $idcreator=$list[0]->creator;
        if ($idcreator !=''){
            $caricreator3 = "SELECT * FROM tbl_content where id = '$idcreator'";
            $list3 = $this->Data_model->jalankanQuery($caricreator3, 3);
            $judul = $list3[0]->judul;
            $data['creator']=$judul;
            $data['val']=$list3[0]->id;
            $data['un']='';
            $qcreator1 = "SELECT * FROM tbl_content where form_name = '$creator' and judul <> '$judul' order by id DESC";
        }else{
            $data['creator']='----- creator -----';
            $data['val']='';
            $data['un']='';
            $qcreator1 = "SELECT * FROM tbl_content where form_name = '$creator' order by id DESC";
        }
        $data['sqlcreator'] = $this->Data_model->jalankanQuery($qcreator1, 3);
        
        $this->load->view('dataweb/index', $data);
    }
    
    public function update() {
        $menu=$this->input->post('menu');
        $id = $this->input->post('id');
        $status  =$this->input->post('status');
        $status  !=1 ? $cstatus=0  : $cstatus=1;
        
        $data_update = array(
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
            'status' => $status,
        );
        $where = array('id' => $id);
        
        $this->Data_model->updateDataWhere($data_update,'tbl_content',$where);

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['overwite'] = 'TRUE';

        $this->load->library('upload', $config);
        
//   update images1        
            if ($this->upload->do_upload('images')) {

//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images" => $query[0]->images,
                );
//                images1
                $images1=$data['images'];
                if ($images1 != NULL){
                    $img1=explode('.',$images1);
                    $thumbimage1=$img1[0].'_thumb'.'.'.$img1[1];
                    unlink("upload/".$images1);
                    unlink("upload/".$thumbimage1);
                }else{
                    $image1="";
                }
                
//                upload
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            } else {
            }
//   update images2     
            if ($this->upload->do_upload('images2')) {
//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images2" => $query[0]->images2,
                );
//                images2
                $images2=$data['images2'];
                if ($images2 != NULL){
                    $img2=explode('.',$images2);
                    $thumbimage2=$img2[0].'_thumb'.'.'.$img2[1];
                    unlink("upload/".$images2);
                    unlink("upload/".$thumbimage2);
                }else{
                    $image1="";
                }
//                upload
                $upload_data2 = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images2' => $data['upload_data']['file_name']
                );

                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './upload/'.$upload_data2['file_name'];
                    $config2['create_thumb'] = TRUE;
                    $config2['maintain_ratio'] = TRUE;
                    $config2['width']         = 75;
                    $config2['height']       = 75;

                    $this->load->library('image_lib', $config2);
                    $this->image_lib->initialize($config2);
                    $this->image_lib->resize();
                    
                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            } else {
            }        
//   update images3        
            if (!$this->upload->do_upload('images3')) {
            } else {
//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images3" => $query[0]->images3,
                );
//                images3
                $images=$data['images3'];
                if ($images != NULL){
                    $img=explode('.',$images);
                    $thumbimage=$img[0].'_thumb'.'.'.$img[1];
                    unlink("upload/".$images);
                    unlink("upload/".$thumbimage);
                }else{
                    $image="";
                }
                
//                upload
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images3' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images3'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    
                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            }
//   update images4        
            if (!$this->upload->do_upload('images4')) {
            } else {
//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images4" => $query[0]->images4,
                );
//                images4
                $images=$data['images4'];
                if ($images != NULL){
                    $img=explode('.',$images);
                    $thumbimage=$img[0].'_thumb'.'.'.$img[1];
                    unlink("upload/".$images);
                    unlink("upload/".$thumbimage);
                }else{
                    $image="";
                }
                
//                upload
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images4' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images4'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            } 
//   update images5        
            if (!$this->upload->do_upload('images5')) {
            } else {
//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images5" => $query[0]->images5,
                );
//                images5
                $images=$data['images5'];
                if ($images != NULL){
                    $img=explode('.',$images);
                    $thumbimage=$img[0].'_thumb'.'.'.$img[1];
                    unlink("upload/".$images);
                    unlink("upload/".$thumbimage);
                }else{
                    $image="";
                }
                
//                upload
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images5' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images5'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            } 
//   update images6        
            if (!$this->upload->do_upload('images6')) {
            } else {
//                hapus images
                $q = "SELECT * FROM tbl_content WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images6" => $query[0]->images6,
                );
//                images6
                $images=$data['images6'];
                if ($images != NULL){
                    $img=explode('.',$images);
                    $thumbimage=$img[0].'_thumb'.'.'.$img[1];
                    unlink("upload/".$images);
                    unlink("upload/".$thumbimage);
                }else{
                    $image="";
                }
                
//                upload
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images6' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images6'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    
                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            } 
            
        redirect("menusegment/".$menu);
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
        
        
        
        $kep = $this->Data_model->getLastIdDb('tbl_content', 'id');
        
        $id = $kep['id'];
        //upload
        
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['overwite'] = 'TRUE';

        $this->load->library('upload', $config);
        
//         images1
            if (!$this->upload->do_upload('images')) {
                // redirect("menusegment/".$menu);
            } else {
                // echo "iman";
                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $arr = array(
                    'images' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['images'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 75;
                    $config['height']       = 75;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    
                    $this->load->helper('html');

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
            }
        
//        images2
             if ($this->upload->do_upload('images2')) {
                 $upload_data2 = $this->upload->data();
                 $data = array('upload_data' => $this->upload->data());
                 $arr = array(
                     'images2' => $data['upload_data']['file_name']
                 );

                     $config2['image_library'] = 'gd2';
                     $config2['source_image'] = './upload/'.$upload_data2['file_name'];
                     $config2['create_thumb'] = TRUE;
                     $config2['maintain_ratio'] = TRUE;
                     $config2['width']         = 75;
                     $config2['height']       = 75;

                     $this->load->library('image_lib', $config2);
                     $this->image_lib->initialize($config2);
                     $this->image_lib->resize();
                     
                     $this->load->helper('html');

                 $where = array('id' => $id);
                 $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
             } else {
             }
            
//        images3
             if ($this->upload->do_upload('images3')) {
                 $upload_data = $this->upload->data();
                 $data = array('upload_data' => $this->upload->data());
                 $arr = array(
                     'images3' => $data['upload_data']['file_name']
                 );

                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './upload/'.$upload_data['file_name'];
                     $config['create_thumb'] = TRUE;
                     $config['maintain_ratio'] = TRUE;
                     $config['width']         = 75;
                     $config['height']       = 75;

                     $this->load->library('image_lib', $config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $this->load->helper('html');

                 $where = array('id' => $id);
                 $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
             } else {
             }
             
//        images4
             if ($this->upload->do_upload('images4')) {
                 $upload_data = $this->upload->data();
                 $data = array('upload_data' => $this->upload->data());
                 $arr = array(
                     'images4' => $data['upload_data']['file_name']
                 );

                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './upload/'.$upload_data['file_name'];
                     $config['create_thumb'] = TRUE;
                     $config['maintain_ratio'] = TRUE;
                     $config['width']         = 75;
                     $config['height']       = 75;

                     $this->load->library('image_lib', $config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $this->load->helper('html');

                 $where = array('id' => $id);
                 $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
             } else {
             }
             
//        images5
             if ($this->upload->do_upload('images5')) {
                 $upload_data = $this->upload->data();
                 $data = array('upload_data' => $this->upload->data());
                 $arr = array(
                     'images5' => $data['upload_data']['file_name']
                 );

                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './upload/'.$upload_data['file_name'];
                     $config['create_thumb'] = TRUE;
                     $config['maintain_ratio'] = TRUE;
                     $config['width']         = 75;
                     $config['height']       = 75;

                     $this->load->library('image_lib', $config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $this->load->helper('html');

                 $where = array('id' => $id);
                 $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
             } else {
             }
//        images6
             if ($this->upload->do_upload('images6')) {
                 $upload_data = $this->upload->data();
                 $data = array('upload_data' => $this->upload->data());
                 $arr = array(
                     'images6' => $data['upload_data']['file_name']
                 );

                     $config['image_library'] = 'gd2';
                     $config['source_image'] = './upload/'.$upload_data['file_name'];
                     $config['create_thumb'] = TRUE;
                     $config['maintain_ratio'] = TRUE;
                     $config['width']         = 75;
                     $config['height']       = 75;

                     $this->load->library('image_lib', $config);
                     $this->image_lib->initialize($config);
                     $this->image_lib->resize();

                     $this->load->helper('html');

                 $where = array('id' => $id);
                 $this->Data_model->updateDataWhere($arr, 'tbl_content', $where);
             } else {
             }
        
        $this->session->set_flashdata('success', '<br><center>Content successfully saved</center>');
        redirect("menu/add/".$menu_segment."/".$menu);
    }  
    
    public function delete() {
        error_reporting(0);
        
        $menu=$this->input->post('menu');
        $hapus = $_POST['hapus'];
        $t = array('id' => $hapus);
        
        $q = "SELECT * FROM tbl_content WHERE id = '$hapus'";
        $query= $this->Data_model->jalankanQuery($q, 3);
        $data = array(
            "id" => $query[0]->id,
            "images" => $query[0]->images,
            "images2" => $query[0]->images2,
            "images3" => $query[0]->images3,
            "images4" => $query[0]->images4,
            "images5" => $query[0]->images5,
            "images6" => $query[0]->images6,
        );
        //        images1
        $images1=$data['images'];
        if ($images1 != NULL){
            $img1=explode('.',$images1);
            $thumbimage1=$img1[0].'_thumb'.'.'.$img1[1];
            unlink("upload/".$images1);
            unlink("upload/".$thumbimage1);
        }else{
            $image1="";
        }
        //        images2
        $images2=$data['images2'];
        if ($images2 != NULL){
            $img2=explode('.',$images2);
            $thumbimage2=$img2[0].'_thumb'.'.'.$img2[1];
            unlink("upload/".$images2);
            unlink("upload/".$thumbimage2);
        }else{
            $image2="";
        }
        //        images3
        $images3=$data['images3'];
        if ($images3 != NULL){
            $img3=explode('.',$images3);
            $thumbimage3=$img3[0].'_thumb'.'.'.$img3[1];
            unlink("upload/".$images3);
            unlink("upload/".$thumbimage3);
        }else{
            $image3="";
        }
        //        images4
        $images4=$data['images4'];
        if ($images4 != NULL){
            $img4=explode('.',$images4);
            $thumbimage4=$img4[0].'_thumb'.'.'.$img4[1];
            unlink("upload/".$images4);
            unlink("upload/".$thumbimage4);
        }else{
            $image4="";
        }
        //        images5
        $images5=$data['images5'];
        if ($images5 != NULL){
            $img5=explode('.',$images5);
            $thumbimage5=$img5[0].'_thumb'.'.'.$img5[1];
            unlink("upload/".$images5);
            unlink("upload/".$thumbimage5);
        }else{
            $image5="";
        }
        //        images6
        $images6=$data['images6'];
        if ($images6 != NULL){
            $img6=explode('.',$images6);
            $thumbimage6=$img6[0].'_thumb'.'.'.$img6[1];
            unlink("upload/".$images6);
            unlink("upload/".$thumbimage6);
        }else{
            $image6="";
        }
        
        
        $res = $this->Data_model->hapusDataWhere('tbl_content', $t);
        redirect("menusegment/".$menu);
    }
    
    public function deleteCheck($menu){
        error_reporting(0);
        
        $idcheck = $this->input->post('id');
        
        if ($idcheck!=''){
            foreach ($idcheck as $hapus) {
                $t = array('id' => $hapus);

                $q = "SELECT * FROM tbl_content WHERE id = '$hapus'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images" => $query[0]->images,
                    "images2" => $query[0]->images2,
                    "images3" => $query[0]->images3,
                    "images4" => $query[0]->images4,
                    "images5" => $query[0]->images5,
                    "images6" => $query[0]->images6,
                );
                //        images1
                $images1=$data['images'];
                if ($images1 != NULL){
                    $img1=explode('.',$images1);
                    $thumbimage1=$img1[0].'_thumb'.'.'.$img1[1];
                    unlink("upload/".$images1);
                    unlink("upload/".$thumbimage1);
                }else{
                    $image1="";
                }
                //        images2
                $images2=$data['images2'];
                if ($images2 != NULL){
                    $img2=explode('.',$images2);
                    $thumbimage2=$img2[0].'_thumb'.'.'.$img2[1];
                    unlink("upload/".$images2);
                    unlink("upload/".$thumbimage2);
                }else{
                    $image2="";
                }
                //        images3
                $images3=$data['images3'];
                if ($images3 != NULL){
                    $img3=explode('.',$images3);
                    $thumbimage3=$img3[0].'_thumb'.'.'.$img3[1];
                    unlink("upload/".$images3);
                    unlink("upload/".$thumbimage3);
                }else{
                    $image3="";
                }
                //        images4
                $images4=$data['images4'];
                if ($images4 != NULL){
                    $img4=explode('.',$images4);
                    $thumbimage4=$img4[0].'_thumb'.'.'.$img4[1];
                    unlink("upload/".$images4);
                    unlink("upload/".$thumbimage4);
                }else{
                    $image4="";
                }
                //        images5
                $images5=$data['images5'];
                if ($images5 != NULL){
                    $img5=explode('.',$images5);
                    $thumbimage5=$img5[0].'_thumb'.'.'.$img5[1];
                    unlink("upload/".$images5);
                    unlink("upload/".$thumbimage5);
                }else{
                    $image5="";
                }
                //        images6
                $images6=$data['images6'];
                if ($images6 != NULL){
                    $img6=explode('.',$images6);
                    $thumbimage6=$img6[0].'_thumb'.'.'.$img6[1];
                    unlink("upload/".$images6);
                    unlink("upload/".$thumbimage6);
                }else{
                    $image6="";
                }


                $res = $this->Data_model->hapusDataWhere('tbl_content', $t);
                $this->session->set_flashdata('success', '<br><center>Some content successfully deleted</center>');

            }
        }else{
                $this->session->set_flashdata('empty', '<br><center>No content was deleted</center>');
        }
        
            redirect("menusegment/".$menu);
    }


}
