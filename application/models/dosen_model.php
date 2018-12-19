<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen_model extends CI_Model {

public function all()
{
	//selec * from dosen
	return $this->db->get('dosen')->result();
}
	
public function create($objek){
	return $this->db->insert('dosen', $objek);
}

public function remove($kode){
	$this->db->where('nik', $kode);
	return $this->db->delete('dosen');
}

}
