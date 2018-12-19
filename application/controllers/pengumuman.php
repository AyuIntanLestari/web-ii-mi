<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman extends CI_Controller {

	
	public function wisuda($be = '')
	{
		$data['tanggal']='17 Oktober 2018';
		$data['ketua']='Yoga Sumadewa';
		$data['tambahan']=$be;

		$this->load->view('v_pengumuman', $data);
		
	}
	public function detail(){
		$data['judul']='Data Pengumuman';

		$this->load->view('v_detail', $data);
	}
	
}
