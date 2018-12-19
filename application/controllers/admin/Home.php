<?php 

class Home  extends CI_Controller
{
	
	public function index()
	{
		// echo "Admin / Home";

		$data['judul'] = 'Dashboard';
		$data['sub_judul'] = 'Halaman Utama';
		$data['halaman'] = 'admin/v_index';

		$this->load->view('admin/v_template', $data);
	}

	public function coba()
	{
		// echo "Admin / Home";

		$data['judul'] = 'Dashboard Coba';
		$data['sub_judul'] = 'Halaman Coba';
		$data['halaman'] = 'admin/v_coba';

		$this->load->view('admin/v_template', $data);
	}


}


