<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function index()
	{
		$this->load->view('transaksi/bank');
	}

	
}
