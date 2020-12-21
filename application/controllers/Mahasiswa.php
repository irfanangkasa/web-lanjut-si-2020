<?php

class Mahasiswa extends CI_controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_model');
	}

	public function index()
	{
		$data['tbl_mahasiswa'] = $this->m_model->getAll();
		$this->load->view ('mahasiswa/v_index', $data);
	}

	public function edit($ID)
	{
		$dataInput['tbl_mahasiswa'] = $this->m_model->getById($ID);
		$this->load->view('mahasiswa/v_edit',$dataInput);
	}

	public function update()
	{
		$ID = $this->input->post('ID');
		$NIM = $this->input->post('t_nim');
		$nama = $this->input->post('t_nama');
		$alamat = $this->input->post('t_alamat');

		$dataInput = [
			'NIM' => $NIM,
			'nama' => $nama,
			'alamat' => $alamat
		];

		$this->m_mhs->update($dataInput, $ID);
		redirect('Mahasiswa');
	}

	

}