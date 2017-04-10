<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bidan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_bidan');
	}

	public function index()
	{
        $data['bidan'] = $this->M_bidan->showBidan();
        $this->load->view('super/Hal_bidan', $data);
	}

	function tambah(){
		$this->load->view('super/Add_bidan');
	}
	function tambah_aksi(){
		$Nama_Bidan		= $this->input->post('Nama_Bidan');
		$Alamat_Bidan 	= $this->input->post('Alamat_Bidan');
		$Tlp_Bidan		= $this->input->post('Tlp_Bidan');
		$Tgl_Lahir_Bidan= $this->input->post('Tgl_Lahir_Bidan');
		$Tempat_Lahir_Bidan = $this->input->post('Tempat_Lahir_Bidan');
		$Email_Bidan	= $this->input->post('Email_Bidan');
		$Username_Bidan = $this->input->post('Username_Bidan');
		$Password_Bidan = $this->input->post('Password_Bidan');
		
		$data = array(
				'Nama_Bidan' => $Nama_Bidan,
				'Alamat_Bidan' => $Alamat_Bidan,
				'Tlp_Bidan' => $Tlp_Bidan,
				'Tgl_Lahir_Bidan' => $Tgl_Lahir_Bidan,
				'Tempat_Lahir_Bidan' => $Tempat_Lahir_Bidan,
				'Email_Bidan' => $Email_Bidan,
				'Username_Bidan' => $Username_Bidan,
				'Password_Bidan' => $Password_Bidan);
		$this->M_bidan->inputBidan($data,'t_bidan');
		redirect('super/C_bidan/index');
	}

	public function update($id)
	{
		if($this->input->post('submit')){
			$data["adata"]=$this->M_bidan->readedit();
			$data["hslquery"]=$this->M_bidan->edit($id,$data["adata"]);
			redirect('super/C_bidan');
		}
		$data['hasil'] = $this->M_bidan->getById($id);
		$this->load->view('super/Update_bidan',$data);
	}

	public function delete($delete)
	{
		$data["hslquery"]=$this->M_bidan->hapusBidan($delete);
		redirect("super/C_bidan");
	}
}
