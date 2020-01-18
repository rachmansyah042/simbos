<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Repo_Sekolah_Admin extends CI_Controller {

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
    
    public function get_notoken_func($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
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

            //get all sekolah
            $url = 'https://deployed.my.id:3000/v1/simbos/admin/getSekolah';
            $output = $this->get_func($url, $token);
            $data['sekolah'] = $output->data;
            // var_dump($data);

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');

            $this->load->view('admin/repo_sekolah_admin', $data);

            $this->load->view('template/js_footer'); 

        } 
        
        else {
            redirect('Auth','refresh');
        }
    }

    public function tambah() 
    {
        if( $this->session->userdata('save_token') ==TRUE) {

            // get supervisi
            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $token['use_token']='Authorization: Bearer '.$use_token;

            $url = 'https://deployed.my.id:3000/v1/simbos/admin/getSupervisor';
            $output = $this->get_func($url, $token);
            $data['supervisi'] = $output->data;
            // var_dump($data);

            // get bentuk sekolah
            $url_bentuk = 'https://deployed.my.id:3000/v1/get/getbentuk';
            $output_bentuk = $this->get_notoken_func($url_bentuk);
            $data['bentuk_sekolah'] = $output_bentuk->data;
            // print_r($data['bentuk_sekolah']);
            
            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');
    
            $this->load->view('admin/repo_sekolah_admin_tambah', $data);
    
            $this->load->view('template/js_footer');
         } 
        
        else {
            redirect('Auth','refresh');
        }
    }

    public function doTambah() 
    {

        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $data['use_token']='Authorization: Bearer '.$use_token;

        $npsn=$this->input->post('NPSN');
        $nama_sekolah=$this->input->post('nama_sekolah');
        $status=$this->input->post('status');
        $bentuk=$this->input->post('bentuk');
        $alamat=$this->input->post('alamat');
        $kecamatan=$this->input->post('kecamatan');
        $kelurahan=$this->input->post('kelurahan');
        $kode_pos=$this->input->post('kode_pos');
        $nama_kepsek=$this->input->post('nama_kepsek');
        $telp_kepsek=$this->input->post('telp_kepsek');
        $email_kepsek=$this->input->post('email_kepsek');
        $nip_kepsek=$this->input->post('nip_kepsek');
        $nama_bendahara=$this->input->post('nama_bendahara');
        $telp_bendahara=$this->input->post('telp_bendahara');
        $email_bendahara=$this->input->post('email_bendahara');
        $nip_bendahara=$this->input->post('nip_bendahara');
        $nama_komite=$this->input->post('nama_komite');
        $telp_komite=$this->input->post('telp_komite');
        $email_komite=$this->input->post('email_komite');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $fullname=$this->input->post('fullname');
        $password=$this->input->post('password'); 
        $supervisor=$this->input->post('supervisor'); 

        $url = 'https://deployed.my.id:3000/v1/simbos/admin/addSekolah';
        $passData=array('NPSN'=>$npsn, 'nip_kepsek'=>$nip_kepsek,'nip_bendahara'=>$nip_bendahara, 'nama_sekolah'=>$nama_sekolah, 'status'=>$status, 'bentuk'=>$bentuk, 'alamat'=>$alamat, 'kecamatan'=>$kecamatan, 'kelurahan'=>$kelurahan, 'kode_pos'=>$kode_pos, 'nama_kepsek'=>$nama_kepsek, 'telp_kepsek'=>$telp_kepsek, 'nama_bendahara'=>$nama_bendahara, 'telp_bendahara'=>$telp_bendahara, 'nama_komite'=>$nama_komite, 'telp_komite'=>$telp_komite, 'email_kepsek'=>$email_kepsek, 'email_bendahara'=>$email_bendahara, 'email_komite'=>$email_komite, 'username'=>$username, 'email'=>$email, 'fullname'=>$fullname, 'password'=>$password, 'supervisor'=>$supervisor);

        $tambah = json_decode($this->post_func($url, $passData, $data));
        // print_r($tambah->status);
        // print_r($passData);

        if($tambah->status==200) {
            redirect('Admin/Repo_Sekolah_Admin','refresh');
        } else if($tambah->status==400) {
            $this->session->set_flashdata('message400','<div class="alert alert-danger text-center" role="alert">Username / Password Operator Sudah Terdaftar, Harap Masukan Username atau Password Baru 
            </div>');
            redirect('Admin/Repo_Sekolah_Admin/tambah');
        } else {
            $this->session->set_flashdata('message500','<div class="alert alert-danger text-center" role="alert">Terjadi Kesalahan, Mohon Isi Kembali
            </div>');
            redirect('Admin/Repo_Sekolah_Admin/tambah');
        }

    }

    public function edit($id) 
    {
        if( $this->session->userdata('save_token') ==TRUE) {

            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $token['use_token']='Authorization: Bearer '.$use_token;

            // get bentuk sekolah
            $url_bentuk = 'https://deployed.my.id:3000/v1/get/getbentuk';
            $output_bentuk = $this->get_notoken_func($url_bentuk);
            $data['bentuk_sekolah'] = $output_bentuk->data;
            // print_r($data['bentuk_sekolah']);

            // $detail sekolah
            $url = 'https://deployed.my.id:3000/v1/simbos/admin/detailSekolah/'.$id;
            $output = $this->get_func($url, $token);
            $data['data'] = $output->data;
            // print_r($output->data);

            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin');

            $this->load->view('admin/repo_sekolah_admin_edit', $data);

            $this->load->view('template/js_footer');

        } 
        
        else {
            redirect('Auth','refresh');
        }
    }
}

?>