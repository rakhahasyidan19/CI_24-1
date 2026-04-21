<?php
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_model');
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['kategori'] = $this->Kategori_model->getAll();
        $data['anggota'] = $this->anggota_model->getAll();

        $this->load->view('dashboard', $data);
    }
}