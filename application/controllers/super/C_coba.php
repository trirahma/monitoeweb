<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_coba extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
        $this->load->view('super/index');
	}

	public function bidanProfil(){
		$this->load->view('super/Bidan_Profil');
	}

	public function pasienProfil(){
		$this->load->view('super/Pasien_Profil');
	}

	public function dataPeriksa(){
		$this->load->view('super/Data_Periksa');
	}
}
?>
