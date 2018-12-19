<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perwalian extends CI_Controller {

	public function index()
	{

		$data['judul']= 'Perwalian';
		$data['sub_judul']= 'Halaman Perwalian';
		$data['halaman']= 'admin/v_perwalian';

	
		$this->load->view('admin/v_template', $data);
	}

}
