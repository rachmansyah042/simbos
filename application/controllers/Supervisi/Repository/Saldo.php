<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {

	public function index()
	{
		$this->load->view('supervisor/repository/saldo');
	}

	
}
