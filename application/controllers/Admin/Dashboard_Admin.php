<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        //Library
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('upload');	
        $this->load->library('pagination');

        //Model

        //helper
        $this->load->helper('file');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('path');

    }

    public function index() 
    {
        if( $this->session->userdata('save_token') ==TRUE) {

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');
    
            $this->load->view('admin/dashboard');
    
            $this->load->view('template/js_footer');
            
        } 
        
        else {
            redirect('Auth','refresh');
        }
    }
}

?>