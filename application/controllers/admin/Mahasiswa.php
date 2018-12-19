<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}


	public function index()
	{

		$data['judul']= 'Mahasiswa';
		$data['sub_judul']= 'Halaman Mahasiswa';
		$data['halaman']= 'admin/v_mahasiswa';

		$data['isi_tabel'] = $this->mahasiswa_model->all();

	
		$this->load->view('admin/v_template', $data);
	}

	public function tambah()
	{
		$data['judul']= 'Mahasiswa';
		$data['sub_judul']= 'Halaman Tambah Data Mahasiswa';
		$data['halaman']= 'admin/v_mahasiswa_tambah';

		$this->load->view('admin/v_template', $data);
	}

	public function proses_tambah()
	{
		//Menyesuaikan dengan field/colom tabel pada database

		$obj = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' => $this->input->post('program_studi')
		);

		$this->mahasiswa_model->create($obj);

		redirect('admin/mahasiswa', 'refresh');
	}

	public function hapus($nim)
	{
		$this->mahasiswa_model->remove($nim);

		redirect('admin/mahasiswa', 'refresh');
	}

	public function ubah($nim)
	{
		$data['judul']= 'Mahasiswa';
		$data['sub_judul']= 'Halaman Ubah Data Mahasiswa';
		$data['halaman']= 'admin/v_mahasiswa_ubah';

		$data['isi_data'] = $this->mahasiswa_model->get_id($nim);

		$this->load->view('admin/v_template', $data);
	}

	public function proses_ubah()
	{
		$kode = $this->input->post('nim');
		$obj = array(
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'program_studi' => $this->input->post('program_studi')
		);

		$this->mahasiswa_model->update($kode, $obj);

		redirect('admin/mahasiswa', 'refresh');	
	}

}
