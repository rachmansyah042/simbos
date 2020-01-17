<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Admin extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();

        //Library
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('upload');	

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
        if( $this->session->userdata('save_token') ==TRUE) {

                // get sekolah
            header("Access-Control-Allow-Origin: *");
            $use_token 	= $this->session->userdata('save_token');
            $token['use_token']='Authorization: Bearer '.$use_token;
    
            // $status = 'wait'
            $url = 'https://dispendik-using.id:3000/v1/simbos/admin/getUsers';
            $output = $this->get_func($url, $token);
            $data['users'] = $output->data;
            // var_dump($data);
            
            $this->load->view('template/head_css');
            $this->load->view('template/top_navbar');
            $this->load->view('template/side_navbar_admin', $data);

            $this->load->view('admin/users');

            $this->load->view('template/js_footer');
        } 
        
        else {
            redirect('Auth','refresh');
        }
    }

    public function tambah() {

        if( $this->session->userdata('save_token') ==TRUE) {
                // form validation
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
                'required' => 'Email Tidak Boleh Kosong', 'valid_email' => 'Email Tidak Valid'
            ]);
        
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
                'required' => 'Password Tidak Boleh Kosong', 'min_length' => 'Password Minimal 8 Karakter'
            ]);

            $this->form_validation->set_rules('username', 'Username', 'required|trim', [
                'required' => 'Username Tidak Boleh Kosong'
            ]);

            if($this->form_validation->run() == false) { 

                redirect('Admin/Users_Admin');
                
            }

            else {

                $fullname=$this->input->post('fullname');
                $username=$this->input->post('username');
                $email=$this->input->post('email');
                $password=$this->input->post('password');
                $role=$this->input->post('role');

                $url = 'https://dispendik-using.id:3000/v1/simbos/register';
                $passData=array('fullname'=>$fullname, 'username'=>$username,'email'=>$email, 'password'=>$password, 'role'=>$role, );
                $tambah = json_decode($this->post_func($url, $passData));
                // print_r($tambah);

                if($tambah->status==200) {
                    redirect('Admin/Users_Admin','refresh');
                } else {
                    redirect('Admin/Users_Admin/tambah','refresh');
                }

            }
        } 
        
        else {
            redirect('Auth','refresh');
        }
    }
}

?>