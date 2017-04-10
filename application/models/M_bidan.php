<?php
	class M_bidan extends CI_Model{

		public function showBidan(){
			$this->db->SELECT('*');
			$this->db->from('t_bidan');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function inputBidan($data,$table){
			$this->db->insert($table,$data);
		}

		public function edit($id,$data){
			$this->db->where('Id_Bidan',$id)
					 ->update('t_bidan',$data);
		}

		function readedit(){
			$add=array();
			$add["Nama_Bidan"]= $this->input->post("Nama_Bidan");
			$add["Alamat_Bidan"]= $this->input->post("Alamat_Bidan");
			$add["Tlp_Bidan"]=	$this->input->post("Tlp_Bidan");
			$add["Tgl_Lahir_Bidan"]=$this->input->post("Tgl_Lahir_Bidan");
			$add["Tempat_Lahir_Bidan"]=$this->input->post("Tempat_Lahir_Bidan");
			$add["Email_Bidan"]=$this->input->post("Email_Bidan");
			$add["Username_Bidan"]=$this->input->post("Username_Bidan");
			$add["Password_Bidan"]=$this->input->post("Password_Bidan");
			return $add;
		}

		function getById($id) {
        	return $this->db->get_where('t_bidan', array('Id_Bidan' => $id))->row();
    	}

    	public function hapusBidan($hapus){
			$this->db->delete("t_bidan",array('Id_Bidan'=>$hapus));
			return (($this->db->affected_rows()>0)?TRUE:FALSE);
		}
	}
?>