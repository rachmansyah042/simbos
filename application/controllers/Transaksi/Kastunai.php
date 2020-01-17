<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KasTunai extends CI_Controller {

	public function index()
	{
		$this->load->view('transaksi/kas_tunai');
	}

	function tambahKasTunai(){
		$this->load->view('transaksi/kas_tunai_tambah');
	}

	function editKasTunai(){
		$this->load->view('transaksi/kas_tunai_edit');
	}
}
