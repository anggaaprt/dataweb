<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if (!isset($_SESSION['username'])) {
            redirect('login');
            die();
        }
    }
    
    public function index() {
        $q = "SELECT * FROM tbl_pendaftaran where id = 1";
        $list1= $this->Data_model->jalankanQuery($q, 3);
        $data = array(
            "id" => $list1[0]->id,
            "nama_perusahaan" => $list1[0]->nama_perusahaan,
            "alamat_perusahaan" => $list1[0]->alamat_perusahaan,
            "map" => $list1[0]->map,
            "telp_perusahaan" => $list1[0]->telp_perusahaan,
            "fax_perusahaan" => $list1[0]->fax_perusahaan,
            "email_perusahaan" => $list1[0]->email_perusahaan,
            "design" => $list1[0]->design,
            "images" => $list1[0]->images,
            "link_1" => $list1[0]->link_1,
            "link_2" => $list1[0]->link_2,
            "link_3" => $list1[0]->link_3,
            "link_4" => $list1[0]->link_4,
            "link_5" => $list1[0]->link_5,
            "link_6" => $list1[0]->link_6,
            "name_link_1" => $list1[0]->name_link_1,
            "name_link_2" => $list1[0]->name_link_2,
            "ym_id_1" => $list1[0]->ym_id_1,
            "ym_id_2" => $list1[0]->ym_id_2,
            "username" => $list1[0]->username,
            "password" => $list1[0]->real_pswd,
            "real_pswd" => $list1[0]->real_pswd,
        );
        
        $data['menu'] = 'setting';
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/setting';
        $data['js'] = 'dataweb/js';
        $data['title'] = 'Setting';
        $this->load->view('dataweb/index', $data);
    }
    
    public function update() {
        $id = $this->input->post('id');
        
        $data_update = array(
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
            'map' => $this->input->post('map'),
            'telp_perusahaan' => $this->input->post('telp_perusahaan'),
            'fax_perusahaan' => $this->input->post('fax_perusahaan'),
            'email_perusahaan' => $this->input->post('email_perusahaan'),
            
            
            'link_1' => $this->input->post('link_1'),
            'link_2' => $this->input->post('link_2'),
            'link_3' => $this->input->post('link_3'),
            'link_4' => $this->input->post('link_4'),
            'link_5' => $this->input->post('link_5'),
            'link_6' => $this->input->post('link_6'),
            
            'ym_id_1' => $this->input->post('ym_id_1'),
            'ym_id_2' => $this->input->post('ym_id_2'),
            
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'real_pswd' => $this->input->post('password'),
        );
        $data_update1 = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            );
        
        $where = array('id' => $id);
        $where1 = array('id_akun' => $id);
        $this->Data_model->updateDataWhere($data_update,'tbl_pendaftaran',$where);
        $this->Data_model->updateDataWhere($data_update1,'t_akun',$where1);

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 5000;
        $config['overwite'] = 'TRUE';

        $this->load->library('upload', $config);
        
//   update images1        
            if ($this->upload->do_upload('design')) {
//                hapus images
                $q = "SELECT * FROM tbl_pendaftaran WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "design" => $query[0]->design,
                );
//                images1
                $images1=$data['design'];
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
                    'design' => $data['upload_data']['file_name']
                );

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$arr['design'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']         = 400;
                    $config['height']       = 400;

                    
                    $this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    // anda akan mendapatkan 2 gambar yaitu gambar asli dan thumbnailnya
                    // pada contoh ini saya echo di controller agar lebih sederhana
                    // para prakteknya anda bisa menyimpan nama file tersebut kedalam database
                    $this->load->helper('html');

                    echo img(base_url('upload/'.$upload_data['file_name']));
                    echo br(2);
                    echo img(base_url('upload/'.$upload_data['raw_name'].'_thumb'.$upload_data['file_ext']));
                    echo br(2);

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_pendaftaran', $where);
            } else {
            }
//   update images2     
            if ($this->upload->do_upload('images')) {
//                hapus images
                $q = "SELECT * FROM tbl_pendaftaran WHERE id = '$id'";
                $query= $this->Data_model->jalankanQuery($q, 3);
                $data = array(
                    "id" => $query[0]->id,
                    "images" => $query[0]->images,
                );
//                images2
                $images2=$data['images'];
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
                    'images' => $data['upload_data']['file_name']
                );

                    $config2['image_library'] = 'gd2';
                    $config2['source_image'] = './upload/'.$upload_data2['file_name'];
                    $config2['create_thumb'] = TRUE;
                    $config2['maintain_ratio'] = TRUE;
                    $config2['width']         = 400;
                    $config2['height']       = 400;

                    $this->load->library('image_lib', $config2);
                    $this->image_lib->initialize($config2);
                    $this->image_lib->resize();

                    // anda akan mendapatkan 2 gambar yaitu gambar asli dan thumbnailnya
                    // pada contoh ini saya echo di controller agar lebih sederhana
                    // para prakteknya anda bisa menyimpan nama file tersebut kedalam database
                    $this->load->helper('html');

                    echo img(base_url('upload/'.$upload_data2['file_name']));
                    echo br(2);
                    echo img(base_url('upload/'.$upload_data2['raw_name'].'_thumb'.$upload_data2['file_ext']));
                    echo br(2);

                $where = array('id' => $id);
                $this->Data_model->updateDataWhere($arr, 'tbl_pendaftaran', $where);
            } else {
            }
            
        redirect("setting");
    }

}
