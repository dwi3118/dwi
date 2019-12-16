<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Guru extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul']="Tampil Data Guru";
		$data['tampil']=$this->M_guru->tampil()->result();
		$this->load->view('guru/tampil', $data, FALSE);
	}

	public function input()
	{
		$data['judul']="Tambah Guru Baru";
		$this->load->view('guru/input', $data, FALSE);
	}

	public function save()
	{
		$kode=$this->input->post('nip');
		$nama=$this->load->post('nama');

		$data=array(
			'nip'=>$kode,
			'nama'=>$nama
		);

		$this->M_guru->save($data);
		redirect('guru','refresh');
	}

	public function edit()
	{
		$nip=$this->url->segment(3);
		$data['judul']="edit_data";
		$data['edit']=$this->M_guru->getid($nip)->row_array();
		$this->load->view('guru/edit', $data, FALSE);
	}

	public function update()
	{
		$kode=$this->input->post('nip');
		$kode=$this->input->post('nama');

		$data=array(
			'nama'=>$nama
		);
	}

	public function delete()
	{
		$nip=$this->uri->segment(3);
		$this->db->where('nip', $nip);
		$this->db->delete('guru');
		redirect('guru','refresh');
	}
}