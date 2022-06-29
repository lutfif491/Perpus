<?php

class Buku extends CI_Controller
{

    public function index()
    {
        $isi['content'] = 'buku/v_buku';
        $isi['judul']   = 'Daftar Data Buku';
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_buku()
    {
        $isi['content']     = 'buku/form_buku';
        $isi['judul']       = 'Form Tambah Buku';
        $isi['pengarang']   = $this->db->get('pengarang')->result();
        $isi['penerbit']   = $this->db->get('penerbit')->result();
        $this->load->view('v_dashboard', $isi);
    }
}
