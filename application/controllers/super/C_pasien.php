<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pasien extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_pasien');
	}

	public function index()
	{
        $data['pasien'] = $this->M_pasien->showPasien();
        $this->load->view('super/Hal_pasien', $data);
	}

	function tambah(){
		$data['bidan'] = $this->M_pasien->showBidan();
		$this->load->view('super/Add_pasien', $data);
	}
	function tambah_aksi(){
		$Nama_Pasien		= $this->input->post('Nama_Pasien');
		$Nama_Suami		= $this->input->post('Nama_Suami');
		$Alamat_Pasien 	= $this->input->post('Alamat_Pasien');
		$Tgl_Lahir_Pasien= $this->input->post('Tgl_Lahir_Pasien');
		$Tempat_Lahir_Pasien = $this->input->post('Tempat_Lahir_Pasien');
		$Golongan_Darah = $this->input->post('Golongan_Darah');
		$Tlp_Pasien		= $this->input->post('Tlp_Pasien');
		$Pekerjaan_Pasien = $this->input->post('Pekerjaan_Pasien');
		$Username_Pasien = $this->input->post('Username_Pasien');
		$Password_Pasien = $this->input->post('Password_Pasien');
		$Id_Bidan = $this->input->post('Id_Bidan');
		
		$data = array(
				'Nama_Pasien' => $Nama_Pasien,
				'Nama_Suami' => $Nama_Suami,
				'Alamat_Pasien' => $Alamat_Pasien,
				'Tgl_Lahir_Pasien' => $Tgl_Lahir_Pasien,
				'Tempat_Lahir_Pasien' => $Tempat_Lahir_Pasien,
				'Golongan_Darah' => $Golongan_Darah,
				'Tlp_Pasien' => $Tlp_Pasien,
				'Pekerjaan_Pasien' => $Pekerjaan_Pasien,
				'Username_Pasien' => $Username_Pasien,
				'Password_Pasien' => $Password_Pasien,
				'Id_Bidan' => $Id_Bidan);
		$this->M_pasien->inputPasien($data,'t_pasien');
		redirect('super/C_pasien/index');
	}

	public function update($id)
	{
		if($this->input->post('submit')){
			$data["adata"]=$this->M_pasien->readedit();
			$data["hslquery"]=$this->M_pasien->edit($id,$data["adata"]);
			redirect('super/C_pasien');
		}
		$data['hasil'] = $this->M_pasien->getById($id);
		$data['bidan'] = $this->M_pasien->showBidan();
		$this->load->view('super/Update_pasien',$data);
	}

	public function delete($delete)
	{
		$data["hslquery"]=$this->M_pasien->hapusPasien($delete);
		redirect("super/C_pasien");
	}
}
