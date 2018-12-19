<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

public function all()
{
	//selec * from mahasiswa
	return $this->db->get('mahasiswa')->result();
}

public function create($objek)
{
	return $this->db->insert('mahasiswa', $objek);
}

public function remove($kode)
{
	$this->db->where('nim', $kode);
	return $this->db->delete('mahasiswa');
}
	
public function get_id($kode)
{
	//select from mahasiswa where nim = 'parameter'
	$this->db->where('nim', $kode);
	return $this->db->get('mahasiswa')->row();
}

public function update($kode, $objek)
{
	 $this->db->where('nim', $kode);
	 return $this->db->update('mahasiswa', $objek);
}



}
