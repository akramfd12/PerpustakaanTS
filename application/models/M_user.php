<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
// Usermodel yang menghubungkannya dengan tabel users
{
     // Proses awal
    function __construct()
    {
        $this->load->database(); //untuk memanggil yaitu load database
    }
    function get_user() //Membuat fungsi untuk memanggil tabel users
    {
        return $this->db->get('users')->result_array(); //result array untuk memanggil seluruh data
    }
    function get_user_dashboard()
    {
        return $this->db->get()->row_array(); //row array untuk memanggil 1 data
    }
    function get_detail_user($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('users')->row_array();
    }
    function insert($a, $profile) //membuat fungsi insert untuk input data
    {
        $data = [ //variabel data yang berisi input nama,email,password,alamat,telepon,foto profile
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => md5($a['password']),
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon'],
            'profile' => $profile
        ]; //setelah di isi variabel data akan masuk kedalam tabel users
        return $this->db->insert('users', $data);
    }
    function update($a, $id, $profile = null) //membuat fungsi update untuk update data user
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon'],
            'profile' => $profile
        ];
        $this->db->where('id', $id); 
        return $this->db->update('users', $data);
    }
    function update_profile($a, $id) //membuat fungsi update untuk update foto profile user
    {
        $data = [
            'profile' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
    function delete($a) //membuat fungsi delete berdasarkan id yang dipilih
    {
        $this->db->where('id', $a);
        return $this->db->delete('users');
    }
    function auth($email, $pwd) //membuat fungsi authentifikasi untuk login berdasarkan email dan password
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('users')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function get_detail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('users')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
}
?>

</html>