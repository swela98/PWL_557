<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('mahasiswa')
				 ->order_by('id', 'DESC')
				 ->get();
		return $query->result();
	}

	public function riwayat()
	{
		$query = $this->db->select("*")
				 ->from('history')
				 ->order_by('id', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("mahasiswa", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id)
	{
		
		$query = $this->db->where("id", $id)
				->get("mahasiswa");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("mahasiswa", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("mahasiswa", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}