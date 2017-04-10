<?php
	class M_pasien extends CI_Model{

		public function showPasien(){
			$this->db->SELECT('*');
			$this->db->from('t_pasien');
			$this->db->join('t_bidan','t_pasien.Id_Bidan = t_bidan.Id_Bidan','inner');
			$query = $this->db->get();
			return $query->result();
		}

		public function showBidan(){
			$this->db->SELECT('*');
			$this->db->from('t_pasien');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function inputPasien($data,$table){
			$this->db->insert($table,$data);
		}

		public function edit($id,$data){
			$this->db->where('Id_Pasien',$id)
					 ->update('t_pasien',$data);
		}

		function readedit(){
			$add=array();
			$add["Nama_Pasien"]= $this->input->post("Nama_Pasien");
			$add["Nama_Suami"]= $this->input->post("Nama_Suami");
			$add["Alamat_Pasien"]=	$this->input->post("Alamat_Pasien");
			$add["Tgl_Lahir_Pasien"]=$this->input->post("Tgl_Lahir_Pasien");
			$add["Tempat_Lahir_Pasien"]=$this->input->post("Tempat_Lahir_Pasien");
			$add["Golongan_Darah"]=$this->input->post("Golongan_Darah");
			$add["Tlp_Pasien"]=$this->input->post("Tlp_Pasien");
			$add["Pekerjaan_Pasien"]=$this->input->post("Pekerjaan_Pasien");
			$add["Username_Pasien"]=$this->input->post("Username_Pasien");
			$add["Password_Pasien"]=$this->input->post("Password_Pasien");
			$add["Id_Bidan"]=$this->input->post("Id_Bidan");
			return $add;
		}

		function getById($id) {
			$query = $this->db->query("SELECT * from t_pasien as a inner join t_bidan as b on a.Id_Bidan=b.Id_Bidan where a.Id_Pasien='$id'");
        	return $query->row();
    	}

    	public function hapusPasien($hapus){
			$this->db->delete("t_pasien",array('Id_Pasien'=>$hapus));
			return (($this->db->affected_rows()>0)?TRUE:FALSE);
		}
	}
?>