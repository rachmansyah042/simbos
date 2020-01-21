<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {


    private $jenis;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('upload');     
        $this->_module = 'auth';
        $this->load->helper('path');
        // $this->$jenis;
        // $this->$uraian;
    } 

	public function post_func($url,$passData,$token){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $content =curl_exec($ch);
        $posts = json_decode($content);
        curl_close($ch);
        return $posts;
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
		$use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');
        $data['token'] = $use_token;

		if(isset($_POST['id_bank'])){
			$idBank = $_POST['id_bank'] ;
			$_SESSION['idBank'] = $idBank;
			// print_r($idBank);
			$url = "https://deployed.my.id:3000/v1/simbos/operator/get/kastunai/".$idBank;
			$data_detail_bank = $this->get_func($url, $token);
			$data['detail_bank'] = $data_detail_bank;
		// print_r($data['detail_bank']);
		}

		
		
		

		$url = 'https://deployed.my.id:3000/v1/simbos/operator/getTransaksibank';
		$data_bank = $this->get_func($url, $token);
		$data['data_bank'] = $data_bank->data;
		// print_r($data['data_bank']);

		$this->load->view('transaksi/bank', $data);
	}

	function addBank(){

		$use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
		$id_sekolah  = $this->session->userdata('id_sekolah');
		
		$url = 'https://deployed.my.id:3000/v1/simbos/admin/getMatrik';
		$data_matrik = $this->get_func($url, $token);
        $data['data_matrik'] = $data_matrik->data;
        // print_r($data['data_matrik']);

		$url = 'https://deployed.my.id:3000/v1/simbos/admin/getPajak';
		$data_pajak = $this->get_func($url, $token);
		$data['data_pajak'] = $data_pajak->data;
        // print_r($data['data_pajak']);
        
        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getJenisbelanja';
        $data_jenis_belanja = $this->get_func($url, $token);
        $data['data_jenis_belanja'] = $data_jenis_belanja->data;
        // print_r($data['data_jenis_belanja']);

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRekanan/'.$id_sekolah;
        $data_rekanan = $this->get_func($url, $token);
        $data['data_rekanan'] = $data_rekanan->data;
        // print_r($data['data_rekanan']);

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRkas/';
        $data_rkas = $this->get_func($url, $token);
        $data['data_rkas'] = $data_rkas->data;
        // print_r($data['data_rkas']);

        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getBelanja';
        $data_kategori = $this->get_func($url, $token);
        $data['data_kategori'] = $data_kategori->data;
		// print_r($data['data_kategori']);
		
		$url = 'https://deployed.my.id:3000/v1/simbos/operator/getJenistransaksi';
		$data_jenis_transaksi = $this->get_func($url, $token);
		$data['data_jenis_transaksi'] = $data_jenis_transaksi->data;
        // print_r($data['data_jenis_transaksi']);
        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getTribulan';
        $data_tribulan = $this->get_func($url, $token);
        $data['data_tribulan'] = $data_tribulan->data;
        // var $transaksi = string;
        if(isset($_POST["data"])){
            $transaksi = $_POST["data"];
            $_SESSION['transakasi'] = $transaksi;
            // var_dump($transaksi);
        }
        
        
		$this->load->view('transaksi/bank_tambah', $data);
	}

	function editBank($id){
        $id = $this->uri->segment(4);

        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');
        
        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getMatrik';
		$data_matrik = $this->get_func($url, $token);
        $data['data_matrik'] = $data_matrik->data;
        // print_r($data['data_matrik']);

		$url = 'https://deployed.my.id:3000/v1/simbos/admin/getPajak';
		$data_pajak = $this->get_func($url, $token);
		$data['data_pajak'] = $data_pajak->data;
        // print_r($data['data_pajak']);
        
        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getJenisbelanja';
        $data_jenis_belanja = $this->get_func($url, $token);
        $data['data_jenis_belanja'] = $data_jenis_belanja->data;
        // print_r($data['data_jenis_belanja']);

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRekanan/'.$id_sekolah;
        $data_rekanan = $this->get_func($url, $token);
        $data['data_rekanan'] = $data_rekanan->data;
        // print_r($data['data_rekanan']);

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getRkas/';
        $data_rkas = $this->get_func($url, $token);
        $data['data_rkas'] = $data_rkas->data;
        // print_r($data['data_rkas']);

        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getBelanja';
        $data_kategori = $this->get_func($url, $token);
        $data['data_kategori'] = $data_kategori->data;

		$url = 'https://deployed.my.id:3000/v1/simbos/operator/getTransaksibankId/'.$id;
		$kas_tunai = $this->get_func($url, $token);
        $data['kas_tunai'] = $kas_tunai->data;

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/getJenistransaksi';
		$data_jenis_transaksi = $this->get_func($url, $token);
		$data['data_jenis_transaksi'] = $data_jenis_transaksi->data;
        // print_r($data['kas_tunai']);

        if($kas_tunai->data->_id == "5dd2673260b3751cf048bdfb"){
            $this->load->view('transaksi/bank_edit', $data);
        }else{
            $this->load->view('transaksi/bank_edit_tunai', $data);
        }
		
	}


	function addDatabaseBank(){
		$use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
             

        $jenis_transaksi    = $_SESSION['transakasi'];
        // $_SESSION['jenisTransakasi'] = $jenis_transaksi;
        $bukti              = $this->input->post('no_bukti');
        $uraian             = $this->input->post('uraian');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $matrik             = $this->input->post('matrik');
        $pajak              = $this->input->post('pajak');
        $rekanan            = $this->input->post('rekanan');
        $kategori           = $this->input->post('kategori');
        $rkas               = $this->input->post('rkas');
        $jenis_belanja      = $this->input->post('jenis_belanja');
        $status             = $this->input->post('status');
        $namaItem           = $this->input->post('nama');
        $qty                = $this->input->post('qty');
        $nominal            = $this->input->post('nominal');
        $harga              = $this->input->post('harga');
        $total              = $this->input->post('totalHarga');
        $tribulan           = $this->input->post('tribulan');
        
        $passData = array(
            'tanggal_transaksi' => $tanggal,
            'nomer_bukti'       => $bukti,
            'jenis_transaksi'   => $jenis_transaksi,
            'uraian'            => $uraian,
            'jenis_belanja'     => $jenis_belanja,
            'kategori_belanja'  => $kategori,
            'realisasi'         => $rkas,
            'matrik'            => $matrik,
            'rekanan'           => $rekanan,
			'item'              => $namaItem,
			'status'			=> $status,
            'qty'               => $qty,
            'satuan'            => $nominal,
            'harga'             => $harga,
            'total_harga'       => $total,
            'pajak'             => $pajak,
            'tribulan'          => $tribulan,
		);
		
		

		$url = 'https://deployed.my.id:3000/v1/simbos/operator/addTransaksibank';
		$response = $this->post_func($url, $passData, $token);
		// print_r($response);

		if($response->status == 200){
			redirect('Transaksi/Bank');
		}
		
    }
    
    function addDatabaseBankTunai(){
        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;

        $tribulan           = $this->input->post('tribulan');
        $bukti              = $this->input->post('no_referensi');
        $uraian             = $this->input->post('uraian');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $nominal            = $this->input->post('nominal');

        $dataJenis = $_SESSION['transakasi'];
        $passData = array(
            'tanggal_transaksi' => $tanggal,
            'nomer_referensi'   => $bukti,
            'jenis_transaksi'   => $dataJenis,
            'uraian'            => $uraian,
            'total_harga'       => $nominal,
            'tribulan'          => $tribulan
        );

        // print_r($passData);
        // exit();

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/addTransaksibank';
		$response = $this->post_func($url, $passData, $token);
        // print_r($response);
        // exit();

		if($response->status == 200){
			redirect('Transaksi/Bank');
		}
    }

    function deleteBank($id){
        $id_hapus = $this->uri->segment(4);
    }
}
