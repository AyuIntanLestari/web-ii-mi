<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function profil()
	{
		echo "Nama  : Ayu Intan Lestari <br>";
		echo "Nim   : 1700330027 <br>";
		echo "Email : ayuintanlestari4@gmail.com <br>";
	}
	public function dosen($parameter1='')
	{
		echo "Nama Dosenku ".$parameter1;

	}
	public function krs($semester='', $matkul='')
	{
		echo "Saya semester ke_".$semester." Mengambil matakuliah ".$matkul;
	}

	public function get_semester()
	{
		echo "Semester : 3";
		
	}
}
