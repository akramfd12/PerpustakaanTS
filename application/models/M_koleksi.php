<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_koleksi extends CI_Model

{
    // Proses awal
    function __construct()
    {
        $this->load->database(); //untuk memanggil yaitu load database
    }
    function get_koleksi_buku() //Membuat fungsi untuk memanggil tabel koleksi_buku
    {
        return $this->db->get('koleksi_buku')->result_array(); //result array untuk memanggil seluruh data
    }
    function get_detail_koleksi($a)
    {
        $this->db->where('id_buku', $a);
        return $this->db->get('koleksi_buku')->row_array(); //row array untuk memanggil 1 data
    }
    function insert($a, $cover) //membuat fungsi insert untuk input data
    {
        $data = [ //variabel data yang berisi input judul,penuis,penerbit,sinopsis, dan cover
            'judul' => $a['judul'],
            'genre' => $a['genre'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'tahun' => $a['tahun'],
            'sinopsis' => $a['sinopsis'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi_buku', $data);
    }
    function update($a, $id, $cover = null) //membuat fungsi insert untuk update data
    {
        $data = [
            'judul' => $a['judul'],
            'genre' => $a['genre'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'tahun' => $a['tahun'],
            'sinopsis' => $a['sinopsis'],
            'cover' => $cover
        ];
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }
    function update_cover($a, $id) //membuat fungsi update untuk update cover buku
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id_buku', $id);
        return $this->db->update('koleksi_buku', $data);
    }
    function delete($a) //membuat fungsi delete berdasarkan id yang dipilih
    {
        $this->db->where('id_buku', $a);
        return $this->db->delete('koleksi_buku');
    }
}

?>

</html>