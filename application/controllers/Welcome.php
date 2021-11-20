<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_mhs');
	}

	public function index()
	{
		$recordMhs = $this->M_mhs->getDataMhs();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}

	public function formInput(){
		$this->load->view('form_input');
	}

	public function formEdit($id){
		$where = array('id' => $id);
		$data['tbl_mhs'] = $this->M_mhs->edit_data($where, 'tbl_mhs')->result();
		$this->load->view('form_edit', $data);
	}

	public function AksiInsert(){
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$namamhs = $this->input->post('namamhs');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$email = $this->input->post('email');
		$foto = $this->input->post('foto');

		$DataInsert = array (
			'nim' => $nim,
			'namamhs' => $namamhs,
			'jk' => $jk,
			'alamat' => $alamat,
			'kota' => $kota,
			'email' => $email,
			'foto' => $foto
		);
		
		$this->M_mhs->InsertDataMhs($DataInsert);
		redirect(base_url('#'));
	}

	public function AksiEdit(){
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$namamhs = $this->input->post('namamhs');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$email = $this->input->post('email');
		$foto = $this->input->post('foto');

		$data = array(
			'id' => $id,
			'nim' => $nim,
			'namamhs' => $namamhs,
			'jk' => $jk,
			'alamat' => $alamat,
			'kota' => $kota,
			'email' => $email,
			'foto' => $foto,
		);

		$where = array('id' => $id);

		$this->M_mhs->update_data($where, $data, 'tbl_mhs');
		redirect (base_url('#'));
	}

	public function AksiDelete($id){
		$where = array('id' => $id);
		$this->M_mhs->hapus_data($where, 'tbl_mhs');
		redirect (base_url('#'));
	}
}
