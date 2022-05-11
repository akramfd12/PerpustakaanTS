<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
        $this->load->model("M_pinjam");
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

public function index()
    {
        $data['list'] = $this->M_pinjam->get_pinjam_buku();
        $this->load->view('template/header');       
        $this->load->view('pinjam/v_Pinjam',$data);
        $this->load->view('template/footer');
    }
public function add_pinjam($a)
    {
        $data['detail'] = $this->M_pinjam->get_detail_buku($a);        
        $this->load->view('template/header');
        $this->load->view('pinjam/v_addPinjam', $data);
        $this->load->view('template/footer');
    }
public function insert_pinjam()
    {
        $this->M_pinjam->insert($this->input->post());
        redirect('Pinjam', 'refresh');
    }
public function detail_pinjam($a = null)
    {
        $data['detail'] = $this->M_pinjam->pinjam_buku($a);
        $this->load->view('template/header');
        $this->load->view('pinjam/v_detailPinjam', $data);
        $this->load->view('template/footer');
    }
public function selesai($a)
    {
        $this->M_pinjam->selesai($a);
        redirect('Pinjam', 'refresh');
    }

}