<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('v_about');
        $this->load->view('template/footer');
    }
}
