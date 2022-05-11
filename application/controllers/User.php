<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('text', 'url'));
        $this->load->model('M_user');
        // if ($this->session->userdata('nama') == '') {
        //     redirect(base_url('login'));
        // }
    }
    public function index()
    {
        $data['list'] = $this->M_user->get_user();

        $this->load->view('template/header');
        $this->load->view('user/v_User', $data);
        $this->load->view('template/footer');
    }
    public function detail_user($a = null)
    {
        $data['detail'] = $this->M_user->get_detail_user($a);
        $this->load->view('template/header');
        $this->load->view('user/v_detailUser', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $this->load->view('template/header');
        $this->load->view('user/v_addUser');
        $this->load->view('template/footer');
    }
    public function insert()
    {
        $profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/fotoprofile/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profile');
        if ($this->M_user->insert($this->input->post(), $profile)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    }
    
    public function edit($a)
    {
        $data['detail'] = $this->M_user->get_detail_user($a);
        $this->load->view('template/header');
        $this->load->view('user/v_editUser', $data);
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('profile')) {
            $this->M_user->update_profile($id, $profile);
        }
        if ($this->M_user->update($this->input->post(), $id, $profile)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }
    }
    public function delete($a)
    {
        $this->M_user->delete($a);
        redirect('User', 'refresh');
    }
}
