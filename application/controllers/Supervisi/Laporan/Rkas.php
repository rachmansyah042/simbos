<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rkas extends CI_Controller {

	public function index()
	{
		$this->load->view('supervisor/laporan/laporan_rkas');
	}

	
}
