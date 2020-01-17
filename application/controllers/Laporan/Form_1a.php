<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_1a extends CI_Controller {

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
        
        $this->load->view('template/head_css');
        $this->load->view('template/top_navbar');
        $this->load->view('template/side_navbar');

        $this->load->view('laporan/form_1a');

        $this->load->view('template/js_footer');
    }
}

?>