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
}
