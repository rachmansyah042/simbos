<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matrik extends CI_Controller {

	public function index()
	{
		$this->load->view('supervisor/laporan/matrix');
	}

}
