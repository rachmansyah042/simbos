<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Repo_Prog_Admin extends CI_Controller {

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

                // get sekolah
            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $token['use_token']='Authorization: Bearer '.$use_token;

            // $status = 'wait'
            $url = 'https://deployed.my.id:3000/v1/simbos/admin/getProgram';
            $output = $this->get_func($url, $token);
            $data['program'] = $output->data;
            // print_r($data['program']);

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');

            $this->load->view('admin/repo_prog_admin', $data);

            $this->load->view('template/js_footer');
            
        } 
        
        else {
            redirect('Auth','refresh');
        }
    }

    public function tambah() {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $data['use_token']='Authorization: Bearer '.$use_token;

        $nama_program=$this->input->post('nama_program');
        $kode=$this->input->post('kode');
        $tahun=$this->input->post('tahun');
        $nama_kegiatan=$this->input->post('nama_kegiatan');

        $url = 'https://deployed.my.id:3000/v1/simbos/admin/addProgram';
        $passData=array('nama_program'=>$nama_program, 'kode'=>$kode, 'tahun'=>$tahun, 'nama_kegiatan'=>$nama_kegiatan);

        $tambah = json_decode($this->post_func($url, $passData, $data));
        // print_r($passData);

        if($tambah->status == 200) {
            redirect('Admin/Repo_Prog_Admin','refresh');
        } else {
            redirect('Admin/Repo_Prog_Admin','refresh');
        }
        

    }
}

?>