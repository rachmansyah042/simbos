<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekanan extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('upload');	
        $this->load->library('form_validation');			
        // $this->_module = 'Auth';
        $this->load->helper('path');
       
	}
	
	// post function
    public function post_func($url,$passData,$token){
        
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

	public function get_func($url,$token){
        // if ($this->session->userdata('status') != "login") {
        //  redirect('Auth','refresh');
        // }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $content =curl_exec($ch);
        $gets = json_decode($content);
        return $gets;
    }
 
	
	public function index()
	{
        // header("Access-Control-Allow-Origin: *");
        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRekanan/'.$id_sekolah;
        $rakanan = $this->get_func($url,$token);
        $data['data_rekanan'] = $rakanan->data;
        // print_r($data['rekanan']);
		$this->load->view('repository/rekanan', $data);
    }
    
    function addRekanan(){
        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');

        $nama = $this->input->post('nama');
        $kontak = $this->input->post('kontak');
        $npwp = $this->input->post('npwp');
        $telepon = $this->input->post('telepon');
        $status = $this->input->post('status');
        $alamat = $this->input->post('alamat');

        $passData = array(
            'sekolah_id'    => $id_sekolah,
            'rekanan'       => $nama,
            'alamat'        => $alamat,
            'telp'          => $telepon,
            'nama_kontak'   => $kontak,
            'NPWP'          => $npwp,
            'status'        => $status  
        );

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/addRekanan';
        $response = $this->post_func($url,$passData,$token);

        redirect('Repository/rekanan', 'refresh'); 
        // print_r($response);

    }

	
}


