<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_data');
	}
	
	public function index()
	{
		$record = $this->Model_data->getData();
		$data = array('data' => $record);
		$this->load->view('home', $data);
	}

	public function formInput()
	{
		$this->load->view('form_input');
	}

	public function formEdit($id)
	{
		$record = $this->Model_data->getDataDetail($id);
		$DATA = array('data' => $record);
		$this->load->view('form_edit', $DATA);
	}

	public function AksiInsert()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$dataInsert = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat
		);
		
		$this->Model_data->insertData($dataInsert);
		redirect(base_url('index.php/Welcome'));
	}
}
