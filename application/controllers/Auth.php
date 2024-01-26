<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['villa'] = $this->db->get('t_villa')->result_array();
        $this->load->view('index', $data);
    }
    public function data()
    {
        $data['kecamatan'] = $this->db->get('t_villa')->result_array();
        $this->load->view('layout/content/data', $data);
    }
    public function detail($id)
    {
        $data['villa'] = $this->db->get_where('t_villa', ['id_villa' => $id])->row_array();
        $this->load->view('layout/content/detail', $data);
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('t_user', ['username' => $username])->row_array();

            if ($user) {
                if ($password == $user['password']) {
                    $data = [
                        'name' => $user['name'],
                        'username' => $user['username'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong Password!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Email is not registered!</div>');
                redirect('login');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        redirect('index');
    }
}
