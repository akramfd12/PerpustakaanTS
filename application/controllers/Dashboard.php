<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data['detail'] = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('template/header');
        $this->load->view('v_dashboard', $data);
        $this->load->view('template/footer');

    }
}
