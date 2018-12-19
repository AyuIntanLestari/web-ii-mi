<?php 

class Pengumuman  extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model');  //kenalan
	}

	
	public function index()
	{
	
		$data['judul'] = 'Pengumuman';
		$data['sub_judul'] = 'Halaman Pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';

		//parsing data atau mengirim data dari model ke view
		$data['isi_tabel'] = $this->pengumuman_model->all();
		

		$this->load->view('admin/v_template', $data);
		 
	}


	public function tambah(){
		$data['judul'] = 'Pengumuman';
		$data['sub_judul'] = 'Halaman Pengumuman';
		$data['halaman'] = 'admin/v_tambah_pengumuman';

		//$data['isi_tabel'] = $this->pengumuman_model->all();
		
		$this->load->view('admin/v_template', $data);

	}

	
	public function proses_tambah(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis,
		);

		// var_dump($objek); 
		if ($this->pengumuman_model->create($objek)) {

			$this->session->set_flashdata('info', 'Data Berhasil Disimpan !');
			redirect('admin/pengumuman');

		}else{
			

			$this->session->set_flashdata('info', 'Data Gagal Disimpan !');
			redirect('admin/pengumuman');
		}

		
	}


	public function hapus($kode){
		if ($this->pengumuman_model->remove($kode)) {

			$this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
			redirect('admin/pengumuman');

		}else{

			$this->session->set_flashdata('info', 'Data Gagal Dihapus !');
			redirect('admin/pengumuman');
		}
	}

	
	public function edit($id){
		$data['judul'] = 'Edit Pengumuman';
		$data['sub_judul'] = 'Edit Pengumuman';
		$data['halaman'] = 'admin/v_edit_pengumuman';


		$data['isi_data'] = $this->pengumuman_model->get_id($id);
		//untuk mengecek
		// var_dump($data);
		
		$this->load->view('admin/v_template', $data);
	}

	public function proses_edit(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$id = $this->input->post('id_pengumuman');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis,
		);

		if ($this->pengumuman_model->update($id, $objek)) {

			$this->session->set_flashdata('info', 'Data Berhasil Diedit !');
			redirect('admin/pengumuman');

		}else{
			

			$this->session->set_flashdata('info', 'Data Gagal Diedit !');
			redirect('admin/pengumuman');
		}
	}


}