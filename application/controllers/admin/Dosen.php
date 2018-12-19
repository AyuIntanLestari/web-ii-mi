<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index()
	{

		$data['judul']= 'Dosen';
		$data['sub_judul']= 'Halaman Dosen';
		$data['halaman']= 'admin/v_dosen';

		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul']= 'Dosen';
		$data['sub_judul']= 'Halaman Tambah Data Dosen';
		$data['halaman']= 'admin/v_dosen_tambah';

		$this->load->view('admin/v_template', $data);
	}

	public function proses_tambah()
	{
		//Menyesuaikan dengan field/colom tabel pada database

		$obj = array(
			'nik' => $this->input->post('nik'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'mata_kuliah' => $this->input->post('mata_kuliah')
		);

		$this->dosen_model->create($obj);

		redirect('admin/dosen', 'refresh');
	}

	public function hapus($nik)
	{
		$this->dosen_model->remove($nik);

		redirect('admin/dosen', 'refresh');
	}

}
