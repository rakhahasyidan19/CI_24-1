<?php
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['kategori'] = $this->Kategori_model->getAll();
        $data['buku'] = $this->Buku_model->getAll();

        $this->load->view('dashboard', $data);
    }
}