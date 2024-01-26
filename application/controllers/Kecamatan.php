<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function Kecamatan()
    {
        $data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/content/kecamatan', $data);
        $this->load->view('layout/footer');
    }

    public function tambah_kecamatan()
    {
        $data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');

        $name = $this->input->post('name');
        $kode = $this->input->post('kode');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './assets/geojson';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
            } else {
                echo 'gagal';
            }
        }
        $data = [
            'nm_kecamatan' => $name,
            'kd_kecamatan' => $kode,
            'geojson_kecamatan' => $pict_name
        ];

        $this->db->insert('t_kecamatan', $data);
        redirect('kecamatan');
    }

    public function editKecamatan()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $kode = $this->input->post('kode');

        $upload_pict = $_FILES['pict']['name'];
        if ($upload_pict) {
            $config['upload_path'] = './assets/geojson';
            $config['allowed_types'] = '*';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pict')) {
                $pict_name = $this->upload->data('file_name');
                $this->db->set('geojson_kecamatan', $pict_name);
            } else {
                echo 'gagal';
            }
        }

        $this->db->set('nm_kecamatan', $name);
        $this->db->set('kd_kecamatan', $kode);
        $this->db->where('id_kecamatan', $id);
        $this->db->update('t_kecamatan');
        redirect('kecamatan');
    }
    public function deleteKecamatan($id)
    {
        $this->m_webgis->delete_kecamatan($id);
        redirect('kecamatan');
    }
    public function leaflet_standar()
    {
        $data['admin'] = $this->db->get_where('t_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('layout/content/leaflet-standar', $data);
        $this->load->view('layout/footer');
    }
}
