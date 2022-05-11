<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Koleksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('M_koleksi');
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }
    public function index()
    {
        $data['list'] = $this->M_koleksi->get_koleksi_buku();

        $this->load->view('template/header');
        $this->load->view('koleksi/v_Koleksi', $data);
        $this->load->view('template/footer');
    }
    public function detail_koleksi($a = null)
    {
        $data['detail'] = $this->M_koleksi->get_detail_koleksi($a);
        $this->load->view('template/header');
        $this->load->view('koleksi/v_detailKoleksi', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $this->load->view('template/header');
        $this->load->view('koleksi/v_addKoleksi');
        $this->load->view('template/footer');
    }
    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->M_koleksi->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('Koleksi'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->M_koleksi->get_detail($a);
        $this->load->view('template/header');
        $this->load->view('koleksi/v_editKoleksi', $data);
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->M_koleksi->update_cover($cover, $id);
        }
        if ($this->M_koleksi->update($this->input->post(), $id, $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('Koleksi'));
        }
    }

    public function delete($a)
    {
        $this->M_koleksi->delete($a);
        redirect('Koleksi', 'refresh');
    }
}
