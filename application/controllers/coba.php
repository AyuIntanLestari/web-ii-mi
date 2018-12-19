<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coba extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function coba_lagi(){
		echo"Coba Controller";
	}
}
