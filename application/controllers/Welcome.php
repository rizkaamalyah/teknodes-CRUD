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
		// Memuat model
		$this->load->model('Model_data');
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
		// Memuat model
		$this->load->model('Model_data');
		
		// menjalankan kode untuk method getdatabyid
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

	public function AksiEdit() {
        // Memuat model
        $this->load->model('Model_data');

        // Mengambil data dari form
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        // Data yang akan diupdate
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat
        );

        // Melakukan update data
        $this->Model_data->updateData($nik, $data);

        // Redirect ke halaman daftar data
        redirect('Welcome/index');
    }

	public function aksiDelete($nik) {
        // Memuat model
        $this->load->model('Model_data');

        // Memanggil method deleteData di model
        $this->Model_data->deleteData($nik);

        // Redirect ke halaman daftar data
        redirect('Welcome/index');
    }
}
