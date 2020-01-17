<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Repo_Pajak_Admin extends CI_Controller {

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

                // get pajak
            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $token['use_token']='Authorization: Bearer '.$use_token;

            
            $url = 'https://dispendik-using.id:3000/v1/simbos/admin/getPajak';
            $output = $this->get_func($url, $token);
            $data['pajak'] = $output->data;
            // print_r($data['pajak']);

            // jenis pajak
            $url = 'https://dispendik-using.id:3000/v1/simbos/admin/getJenispajak';
            $output_jenis = $this->get_func($url, $token);
            $data['jenis_pajak'] = $output_jenis->data;
            // print_r($data['pajak']);

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');

            $this->load->view('admin/repo_pajak_admin', $data);

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

        $jenis=$this->input->post('jenis');
        $uraian=$this->input->post('uraian');
        $presentase=$this->input->post('presentase');

        $url = 'https://dispendik-using.id:3000/v1/simbos/admin/addPajak';
        $passData=array('jenis'=>$jenis, 'uraian'=>$uraian, 'presentase'=>$presentase);

        $tambah = json_decode($this->post_func($url, $passData, $data));
        // print_r($tambah);

        if($tambah->status == 200) {
            redirect('Admin/Repo_Pajak_Admin','refresh');
        } else {
            redirect('Admin/Repo_Pajak_Admin','refresh');
        }
        
    }

    public function hapus($id) {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $data['use_token']='Authorization: Bearer '.$use_token;


        $url = 'https://dispendik-using.id:3000/v1/simbos/admin/deletePajak';
        $passData=array('pajak_id'=>$id);

        $hapus = json_decode($this->post_func($url, $passData, $data));
        // print_r($hapus);

        if($hapus->status == 200) {
            redirect('Admin/Repo_Pajak_Admin','refresh');
        } else {
            redirect('Admin/Repo_Pajak_Admin','refresh');
        }
        
    }
}

?>