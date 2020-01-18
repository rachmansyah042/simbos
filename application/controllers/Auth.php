<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
    public function post_func($url,$passData){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
        curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $content =curl_exec($ch);
        curl_close($ch);
        return $content;
    }

	public function index()
	{ 
        
		$this->load->view('auth');
	} 

    public function login()
	{ 

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$passData=array('username'=>$username,'password'=>$password);
		$url = 'https://simbos.deployed.my.id:3000/v1/simbos/login';

        $response = json_decode($this->post_func($url, $passData));

        
		$this->load->view('auth');

        if($response->success) {

            if($response->data->data->role == "1") {

                $token = $response->data->token;
                $role = $response->data->data->role;
                $session_data = array('save_token' => $token, 'role' => $role);
                $this->session->set_userdata($session_data);
                
                redirect('Admin/Dashboard_Admin','refresh');
            }
            
            else if ($response->data->data->role == "3") {
    
                $token = $response->data->token;
                $role = $response->data->data->role;
                $id_sekolah = $response->data->data->sekolah;
                $session_data = array('save_token' => $token, 'role' => $role, 'id_sekolah' => $id_sekolah);
                $this->session->set_userdata($session_data);
                // print_r($session_data);
                
                redirect('Home','refresh');
            }
            
        } 

        else {

            $this->session->set_flashdata('message','<div class="alert-login" role="alert">Username / Password Salah !
            </div>');
            redirect('Auth');
        }

    } 
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth');
    }

	
}
