<?php

class Pengarang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengarang');
    }

    public function index()
    {
        $isi['content'] = 'pengarang/v_pengarang';
        $isi['judul']   = 'Daftar Data Pengarang';
        $isi['data']    = $this->db->get('pengarang')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_pengarang()
    {
        $isi['content'] = 'pengarang/form_pengarang';
        $isi['judul']   = 'Daftar Tambah Pengarang';
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data['nama_pengarang'] = $this->input->post('nama_pengarang');
        $queryy = $this->db->insert('pengarang', $data);
        if ($queryy = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('pengarang');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'pengarang/edit_pengarang';
        $isi['judul']   = 'Daftar Edit Pengarang';
        $isi['data']    = $this->m_pengarang->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id_pengarang           = $this->input->post('id_pengarang');
        $data['nama_pengarang'] = $this->input->post('nama_pengarang');
        $queryy = $this->m_pengarang->update($id_pengarang, $data);
        if ($queryy = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Update');
            redirect('pengarang');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_pengarang->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('pengarang');
        }
    }
}
