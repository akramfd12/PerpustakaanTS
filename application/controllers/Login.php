   
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('M_user');
    }

    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('dashboard'));
        } else if ($cookie != '') {
            $sesi = $this->M_user->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect('dashboard');
        }

        $this->load->view('login/v_Login');
        $this->load->view('template/footer');
    }
    public function register()
    {
        $this->load->view('login/v_registerUser');
        $this->load->view('footer');
    }
    public function register_user()
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
            redirect(base_url('login'));
        }
    }
    public function auth()
    {
        $email = $this->input->post('email');
        $pwd = md5($this->input->post('password'));
        $auth = $this->M_user->auth($email, $pwd);
        if ($auth == TRUE) {
            $sesi = $this->M_user->get_detail($email);
            if ($this->input->post('remember-me') != '') {
                $key = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->M_user->update_cookie($key, $sesi['id']);
            }
            $this->session->set_userdata($sesi);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Username atau password salah !');
            $sesi = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect('login');
        }
    }
    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect('login');
    }
}
