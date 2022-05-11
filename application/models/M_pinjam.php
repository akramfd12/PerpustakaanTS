<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends CI_Model
{
    function _construct()
        {
            $this->load->database();
        }
    function get_pinjam_buku() //Membuat fungsi untuk memanggil tabel pinjam_buku
        {
            return $this->db->get('pinjam')->result_array(); //result array untuk memanggil seluruh data
        }        
    function get_detail_buku($a)
        {
            $this->db->where('id_buku', $a);
            return $this->db->get('koleksi_buku')->row_array(); //row array untuk memanggil 1 data
        }
    function get_detail_user($a)
        {
            $this->db->where('id', $a);
            return $this->db->get('users')->row_array();
        } 
    function get_detail_pinjam($a)
        {
            $this->db->where('id_pinjam', $a);
            return $this->db->get('pinjam')->row_array(); //row array untuk memanggil 1 data
        }
    function insert($a) //untuk menambahkan pinjam
        {
            $data = [
                'id_buku' => $a['id_buku'],
                'id' => $a['id'],
                'nama' => $a['nama'],
                'judul' => $a['judul'],
                'batas_waktu' => $a['batas_waktu'],
            ];
            return $this->db->insert('pinjam', $data);
        }  
    function pinjam_buku($a) //Menggabungkan 2 tabel yaitu users dan pinjam
        {      

            $this->db->select('*');
            $this->db->where('id_pinjam', $a);
            $this->db->from('pinjam');
            $this->db->join('users', 'pinjam.id=users.id');
            $this->db->join('koleksi_buku', 'pinjam.id_buku=koleksi_buku.id_buku');
            return $this->db->get()->row_array();
        }
    function selesai($a) 
        {
            $this->db->where('id_pinjam', $a);
            return $this->db->delete('pinjam');
        }
}