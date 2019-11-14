<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		//load model
		$this->load->model('model_buku'); 

	}

	public function index()
	{
		$data = array(

			'title' 	=> 'Data Mahasiswa',
			'data_buku'	=> $this->model_buku->get_all(),

		);

		$this->load->view('data_buku', $data);
	}

	public function riwayat()
	{
		$data = array(

			'title' 	=> 'Riwayat',
			'data_buku' => $this->model_buku->lihatriwayat(),

		);

		$this->load->view('riwayat_buku', $data);
	}

	public function tambah()
	{
		$data = array(

			'title' 	=> 'Tambah Data Mahasiswa'

		);

		$this->load->view('tambah_buku', $data);
	}

	public function simpan()
	{
		$data = array(

			'nim' => $this->input->post("nim"),
			'nama_mahasiswa' => $this->input->post("nama_mahasiswa"),
			'jk' => $this->input->post("jk"),
			'alamat' => $this->input->post("alamat"),
			'no_hp' => $this->input->post("no_hp"),
			
		);

		$this->model_buku->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('buku/');

	}

	public function edit($id)
	{
		$id = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Mahasiswa',
			'data_buku' => $this->model_buku->edit($id),

		);

		$this->load->view('edit_buku', $data);
	}

	public function update()
	{
		$id['id'] = $this->input->post("id");
		$data = array(

			'nim' => $this->input->post("nim"),
			'nama_mahasiswa' => $this->input->post("nama_mahasiswa"),
			'jk' => $this->input->post("jk"),
			'alamat' => $this->input->post("alamat"),
			'no_hp' => $this->input->post("no_hp"),
			
		);

		$this->model_buku->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('buku/');

	}

	public function hapus($id)
	{
		$id['id'] = $this->uri->segment(3);
		
		$this->model_buku->hapus($id);

		//redirect
		redirect('buku/');

	}

}
