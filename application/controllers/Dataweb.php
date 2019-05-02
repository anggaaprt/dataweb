<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dataweb extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $data['title'] = 'DataWeb';
        $data['css'] = 'login/css';
        $data['tujuan'] = 'login/login';
        $data['js'] = 'login/js';
        $this->load->view('dashboardlogin', $data);
    }

    public function doLogin() {
        $res = $this->Data_model->verify_user(array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))), 'v_akun');

        if ($res !== false) {
            foreach ($res as $row => $kolom) {
                $_SESSION[$row] = $kolom;
            }
            if ($_SESSION['role'] == '1') {
                echo base_url('home');
            }
        } else {
            $this->session->set_flashdata('gagallogin', '<br>Password/Email tidak ditemukan/salah');
            echo base_url('Dataweb'); 
        }
    }

    public function doOut() {
        session_unset();
        session_destroy();
        redirect('dataweb');
    }

}
