<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    // ================== TAMPIL DATA ==================
    public function index()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->Buku_model->get_All();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    // ================== TAMBAH ==================
    public function tambah()
    {
        $data['judul'] = 'Tambah Buku';
        $data['kategori'] = $this->Buku_model->getKategori();

        $this->form_validation->set_rules('kode_buku','Kode Buku','required');
        $this->form_validation->set_rules('judul','Judul','required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('buku/form', $data);
            $this->load->view('templates/footer');

        } else {

            $data_insert = [
                'kode_buku' => $this->input->post('kode_buku'),
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'tahun' => $this->input->post('tahun'),
                'kategori_id' => $this->input->post('kategori'),
                'stok' => $this->input->post('stok'),
                'lokasi_rak' => $this->input->post('lokasi_rak'),
            ];

            $this->Buku_model->insert($data_insert);
            redirect('buku');
        }
    }

    // ================== HAPUS ==================
    public function hapus($id)
    {
        $this->Buku_model->delete($id);
        redirect('buku');
    }

    // ================== EDIT ==================
    public function edit($id)
    {
        $data['judul'] = 'Edit Buku';
        $data['buku'] = $this->Buku_model->getById($id);
        $data['kategori'] = $this->Buku_model->getKategori();

        $this->form_validation->set_rules('kode_buku','Kode Buku','required');
        $this->form_validation->set_rules('judul','Judul','required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('buku/edit', $data);
            $this->load->view('templates/footer');

        } else {

            $data_update = [
                'kode_buku' => $this->input->post('kode_buku'),
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'tahun' => $this->input->post('tahun'),
                'kategori_id' => $this->input->post('kategori'),
                'stok' => $this->input->post('stok'),
                'lokasi_rak' => $this->input->post('lokasi_rak'),
            ];

            $this->Buku_model->update($id, $data_update);
            redirect('buku');
        }
    }
}