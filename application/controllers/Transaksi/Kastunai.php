<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KasTunai extends CI_Controller {

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

    public function put_func($url,$passData,$token){
        // if ($this->session->userdata('status') != "login") {
        //  redirect('Auth','refresh');
        // }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($passData));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $content =curl_exec($ch);
        curl_close($ch);
        $gets = json_decode($content);
        // print_r($content);
        return $gets;  
    }


	public function index()
	{
		$use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');
        $data['token'] = $use_token;
        
        // if(isset($_POST['id_bank'])){
		// 	$idBank = $_POST['id_bank'] ;
		// 	$_SESSION['idBank'] = $idBank;
		// 	// print_r($idBank);
			
		// // print_r($data['detail_bank']);
        // }
        
        // $id = $_SESSION['idBank'];
        // $url = "https://deployed.my.id:3000/v1/simbos/operator/get/kastunai/".$id;
        // $data_detail_bank = $this->get_func($url, $token);
        // $data['detail_transaksi'] = $data_detail_bank->data;

        // print_r($data['detail_transaksi']);
        
		$url = 'https://deployed.my.id:3000/v1/simbos/operator/getKastunai';
		$kas_tunai = $this->get_func($url, $token);
		$data['kas_tunai'] = $kas_tunai->data;
		// print_r($data['kas_tunai']);

		$this->load->view('transaksi/kas_tunai', $data);
    }
    

	function tambahKasTunai(){

      
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

        $url = 'https://deployed.my.id:3000/v1/simbos/admin/getTribulan';
        $data_tribulan = $this->get_func($url, $token);
        $data['data_tribulan'] = $data_tribulan->data;
        // print_r($data['data_tribulan']);
    

		$this->load->view('transaksi/kas_tunai_tambah', $data);
	}

	function editKasTunai($id){
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

		$url = 'https://deployed.my.id:3000/v1/simbos/operator/get/kastunai/'.$id;
		$kas_tunai = $this->get_func($url, $token);
        $data['kas_tunai'] = $kas_tunai->data;
        
        $satuan_value = array('Dus','Kodi', 'Lusin', 'Pcs', 'Pack', 'Rim');
        $data['satuan_value'] = $satuan_value;

		// print_r($data['satauan_value']);

		$this->load->view('transaksi/kas_tunai_edit', $data);
    }

    function editData($id){

        $id = $this->uri->segment(4);

        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');

        $qty                = $this->input->post('qty');
        $harga              = $this->input->post('harga');
        $bukti              = $this->input->post('no_bukti');
        $uraian             = $this->input->post('uraian');
        $matrik             = $this->input->post('matrik');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $satuan             = $this->input->post('satuan');
        $total              = $this->input->post('total_harga');
        $item               = $this->input->post('item');
        
        $passData = array(
            'bank_id'           => $id,
            'tanggal_transaksi' => $tanggal,
            'nomer_referensi'   => $bukti ,
            'uraian'            => $uraian,
            'matrik'            => $matrik,
            'item'              => $matrik,
            'qty'               => $qty,
            'satuan'            => $satuan,
            'harga'             => $harga,
            'total_harga'       => $total,
        );

        print_r($passData);
        exit();
        $url = 'deployed.my.id:3000/v1/simbos/operator/editKastunai';
        $response = $this->post_func($url,$passData,$token);
    }
    
    

    function addTransaksiPenerimaan(){
        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        $id_sekolah  = $this->session->userdata('id_sekolah');
        
        $jenis_transaksi    = $this->input->post('jenis_transaksi');
        $harga              = $this->input->post('nominal');
        $bukti              = $this->input->post('no_bukti');
        $uraian             = $this->input->post('uraian');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $tribulan           = $this->input->post('tribulan');

        $passData = array(
            'tanggal_transaksi' => $tanggal,
            'nomer_bukti'       => $bukti,
            'jenis_transaksi'   => $jenis_transaksi,
            'uraian'            => $uraian,
            'harga'             => $harga,
            'tribulan'          => $tribulan
        );

        // print_r($passData);
        // exit();

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/addPenerimaan';
        $response = $this->post_func($url,$passData,$token);

        // print_r($response);

        if($response->status == 200){
            redirect("Transaksi/KasTunai");
        }
    }

        

    function addTransaksiPengeluaran(){

        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
             

        $jenis_transaksi    = $this->input->post('jenis_transaksi');
        $bukti              = $this->input->post('no_bukti');
        $uraian             = $this->input->post('uraian');
        $tanggal            = $this->input->post('tanggal_transaksi');
        $matrik             = $this->input->post('matrik');
        $pajak              = $this->input->post('pajak');
        $rekanan            = $this->input->post('rekanan');
        $kategori           = $this->input->post('kategori');
        $rkas               = $this->input->post('rkas');
        $jenis_belanja      = $this->input->post('jenis_belanja');
        $status             = $this->input->post('setatus');
        $namaItem           = $this->input->post('nama');
        $qty                = $this->input->post('qty');
        $nominal            = $this->input->post('nominal');
        $harga              = $this->input->post('harga');
        $total              = $this->input->post('totalHarga');
        $tribulan              = $this->input->post('tribulan');
        
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
            'qty'               => $qty,
            'satuan'            => $nominal,
            'harga'             => $harga,
            'total_harga'       => $total,
            'pajak'             => $pajak,
            'tribulan'          => $tribulan
        );

        // print_r( $passData );
        // exit();

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/addKastunai';
        $response = $this->post_func($url,$passData,$token);

        if($response->status == 200 ){
            redirect("Transaksi/KasTunai");
        }
        // print_r($response);
    }

    function deleteKasTunai($id){
        $id_hapus = $this->uri->segment(4);
        $use_token  = $this->session->userdata('save_token');
        $token['use_token']='Authorization: Bearer '.$use_token;
        
        // $id = $this->input->post('hapus_id');
        // print_r($id);
        $passData = array(
            'kas_id' => $id_hapus
        );

        // print_r($passData);

        $url = 'https://deployed.my.id:3000/v1/simbos/operator/deleteKastunai';
        $response = $this->post_func($url,$passData,$token);

        // print_r($response);
    }
}
