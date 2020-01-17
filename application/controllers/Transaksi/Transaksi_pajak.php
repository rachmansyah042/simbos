<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pajak extends CI_Controller {

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
            $token['use_token']='Authorization: Bearer '.$use_token;

            //get pajak
            $url_pajak = 'https://dispendik-using.id:3000/v1/simbos/operator/dataPajak';
            $output_pajak = $this->get_func($url_pajak, $token);
            $data['pajak'] = $output_pajak->data;
            // print_r($data['pajak']);

            //get setoran
            $url = 'https://dispendik-using.id:3000/v1/simbos/operator/getSetoran';
            $output = $this->get_func($url, $token);
            $data['setoran'] = $output->data;

            $this->load->view('template/head_css');

            $this->load->view('transaksi/pajak', $data);

            $this->load->view('template/js_footer');

        } 
			
		else {
			redirect('Auth','refresh');
		}
    }

    public function setor() 
    {
     
        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        $nomer_bukti=$this->input->post('nomer_bukti');
        $tanggal_setor= date("Y-m-d", strtotime($this->input->post('tanggal_setor'))); 
        $kastunai=$this->input->post('kastunai'); 

        $url_setor = 'https://dispendik-using.id:3000/v1/simbos/operator/addSetorpajak';
        $passData=array('nomer_bukti'=>$nomer_bukti, 'tanggal_setor'=>$tanggal_setor, 'kastunai'=>$kastunai  );

        $setor = json_decode($this->post_func($url_setor, $passData, $token));

        if ($setor->status == 200) {
            redirect('Transaksi/Transaksi_pajak','refresh');
        }
        else {

            $this->load->view('template/head_css');

            $this->load->view('transaksi/pajak');
    
            $this->load->view('template/js_footer');
        }

    }

    public function batal() 
    {
    
        header("Access-Control-Allow-Origin: *");
        $use_token 	= $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        $kastunai=$this->input->post('kastunai');

        $url_batal = 'https://dispendik-using.id:3000/v1/simbos/operator/batalsetorpajak';
        $passData=array('kastunai'=>$kastunai);

        $batal = json_decode($this->post_func($url_batal, $passData, $token));
        print_r($batal);

        if ($batal->status == 200) {
            redirect('Transaksi/Transaksi_pajak','refresh');
        }
        else {

            $this->load->view('template/head_css');

            $this->load->view('transaksi/pajak');

            $this->load->view('template/js_footer');
        }

    }
}


?>