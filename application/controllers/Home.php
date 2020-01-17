<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if( $this->session->userdata('save_token') ==TRUE) {

			$this->load->view('home');

		} 
			
		else {
			redirect('Auth','refresh');
		}
	}

	
}
