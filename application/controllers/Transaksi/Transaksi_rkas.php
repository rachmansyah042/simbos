<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_rkas extends CI_Controller {

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

    public function get_func($url,$token){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $content =curl_exec($ch);
        $gets = json_decode($content);
        return $gets;
    
    } 

    public function post_func($url,$passData,$token){
        // if ($this->session->userdata('logged_in')!=TRUE) {
        //     redirect('Auth/register','refresh');
        // }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $content =curl_exec($ch);
        curl_close($ch);
        return $content;
    }

    public function index()  
    {
        if( $this->session->userdata('save_token') ==TRUE) {

            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $data['tokens'] = $use_token;
            $token['use_token']='Authorization: Bearer '.$use_token;

            //get rkas
            $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRkas';
            $output = $this->get_func($url, $token);
            $data['rkas'] = $output->data;
            // print_r($data['rkas']);

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar');

            $this->load->view('transaksi/rkas/rkas',$data);

            $this->load->view('template/js_footer');
        } 
			
		else {
			redirect('Auth','refresh');
		}
    }

    public function tambah()
    {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        //get tahun
        $url_tahun = 'https://deployed.my.id:3000/v1/simbos/admin/getTahun';
        $output = $this->get_func($url_tahun, $token);
        $data['tahun'] = $output->data;

        //get tribulan
        $url_tribulan = 'https://deployed.my.id:3000/v1/simbos/admin/getTribulan';
        $output_tribulan = $this->get_func($url_tribulan, $token);
        $data['tribulan'] = $output_tribulan->data;

        //get program & kegiatan
        $url_program = 'https://deployed.my.id:3000/v1/simbos/admin/getProgram';
        $output_program = $this->get_func($url_program, $token);
        $data['program'] = $output_program;
        $index=$this->input->post('index');
        // print_r($index);
       

        $this->load->view('template/head_css');
        $this->load->view('template/top_navbar');
        $this->load->view('template/side_navbar');

        $this->load->view('transaksi/rkas/tambah_rkas',$data);
        
        $this->load->view('template/js_footer');

    }

    public function doTambah()
    {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        //get tahun
        $url_tahun = 'https://deployed.my.id:3000/v1/simbos/admin/getTahun';
        $output = $this->get_func($url_tahun, $token);
        $data['tahun'] = $output->data;

        //get tribulan
        $url_tribulan = 'https://deployed.my.id:3000/v1/simbos/admin/getTribulan';
        $output_tribulan = $this->get_func($url_tribulan, $token);
        $data['tribulan'] = $output_tribulan->data;

        //get program & kegiatan
        $url_program = 'https://deployed.my.id:3000/v1/simbos/admin/getProgram';
        $output_program = $this->get_func($url_program, $token);
        $data['program'] = $output_program;
        $index=$this->input->post('index');
        // print_r($index);

        // tambah rkas
        $tahun=$this->input->post('tahun');
        $tribulan=$this->input->post('tribulan');
        $program=$this->input->post('program');
        $sekolah=$this->session->userdata('id_sekolah');
        $kegiatan=$this->input->post('kegiatan');
        $sub_kegiatan=$this->input->post('sub_kegiatan');
        $amount=$this->input->post('amount'); 

        $url_tambah = 'https://deployed.my.id:3000/v1/simbos/operator/addRkas';
        $passData=array('tahun'=>$tahun,'tribulan'=>$tribulan,'program'=>$program,'sekolah'=>$sekolah,'kegiatan'=>$kegiatan,'sub_kegiatan'=>$sub_kegiatan,'amount'=>$amount );

        $tambah = json_decode($this->post_func($url_tambah, $passData, $token));
        // print_r($passData);

        if($tambah->status == 200) {
            redirect('Transaksi/Transaksi_rkas','refresh');
        } 
        else {
            
            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar');
    
            $this->load->view('transaksi/rkas/tambah_rkas',$data);
            
            $this->load->view('template/js_footer');
        }
    
    }

    public function lihat($id)
    {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        //get detail rkas
        $url_rkas = 'https://deployed.my.id:3000/v1/simbos/operator/get/rkas/'.$id;
        $output = $this->get_func($url_rkas, $token);
        $data['detail_rkas'] = $output->data;
        // print_r($data['detail_rkas']);

        $this->load->view('template/head_css');
        $this->load->view('template/top_navbar');
        $this->load->view('template/side_navbar');

        $this->load->view('transaksi/rkas/lihat_rkas', $data);
        
        $this->load->view('template/js_footer');

    }

}

?>