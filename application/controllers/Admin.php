<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function home()
	{
		$data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['villa'] = $this->db->get('t_villa')->result_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/content/pemetaan', $data);
	}
	public function input_villa()
	{
		$data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/content/input-villa', $data);
	}
	public function tambah_villa()
	{
		$data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pemilik = $this->input->post('pemilik');
		$telepon = $this->input->post('telepon');
		$Latitude = $this->input->post('Latitude');
		$Longitude = $this->input->post('Longitude');

		$data = [
			'nama_villa' => $nama,
			'alamat_villa' => $alamat,
			'nama_pemilik' => $pemilik,
			'no_telepon' => $telepon,
			'latitude' => $Latitude,
			'longitude' => $Longitude
		];

		$this->db->insert('t_villa', $data);
		redirect('villa');
	}
	public function Villa()
	{
		$data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['kecamatan'] = $this->db->get('t_villa')->result_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/content/villa', $data);
		$this->load->view('layout/footer');
	}
	public function edit_villa($id)
	{
		$data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
		$data['villa'] = $this->db->get_where('t_villa', ['id_villa' => $id])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/content/edit-villa', $data);
	}
	public function editVilla()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pemilik = $this->input->post('pemilik');
		$telepon = $this->input->post('telepon');
		$Latitude = $this->input->post('Latitude');
		$Longitude = $this->input->post('Longitude');

		$this->db->set('nama_villa', $nama);
		$this->db->set('alamat_villa', $alamat);
		$this->db->set('nama_pemilik', $pemilik);
		$this->db->set('no_telepon', $telepon);
		$this->db->set('latitude', $Latitude);
		$this->db->set('longitude', $Longitude);
		$this->db->where('id_villa', $id);
		$this->db->update('t_villa');
		redirect('villa');
	}
	public function deleteVilla($id)
	{
		$this->m_webgis->delete_villa($id);
		redirect('villa');
	}
}
