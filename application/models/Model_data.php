<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('input_data'); 
        $query = $this->db->get();
        return $query->result();
    }

	public function InsertData($data)
	{
		$this->db->insert('input_data', $data);
	}

	public function EditData($data, $id)
	{
		$this->db->where('nik', $id);
		$this->db->update('input_data', $data);
	}

	public function getDataDetail($id)
	{
		$this->db->where('nik', $id);
		$query = $this->db->get('input_data');
		return $query->row();
	}

	public function updateData($nik, $data) {
        $this->db->where('nik', $nik);
        $this->db->update('input_data', $data); //ganti data_masyarakat dengan nama table anda
    }
	public function deleteData($nik) {
        $this->db->where('nik', $nik);
        $this->db->delete('input_data'); // Ganti 'data_masyarakat' dengan nama tabel Anda
    }
	
}
