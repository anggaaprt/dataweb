<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('Dataweb');
        if (!isset($_SESSION['username'])) {
            redirect('login');
            die();
        }
        
        
        
    }


    public function a(){
        redirect("Home/b");
    }

    public function b(){
        echo 'b';
    }

    public function index() {
        $data['menu'] = '';
        $data['title'] = 'Dashboard';
        $data['css'] = 'dataweb/css';
        $data['tujuan'] = 'dataweb/home';
        $data['js'] = 'dataweb/js';
        $data['tittle'] = 'Dashboard';
        $this->load->view('dataweb/index', $data);
    }
    
        
    public function i(){
        $i='neneng';
        
        $o=$this->dataweb->iman($i);
        
        $data=array(
            'data1'=>$o['data1'],
        );
        
        echo $data['data1'];
    }


}
