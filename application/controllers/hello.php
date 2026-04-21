<?php

class hello extends CI_Controller{
    public function index()
    {
        $data['nama'] = "Rakha Shidqi Hasyidan";
        $this->load->view('hello_view',$data);
    }
    public function namasaya()
    {
        $data['nama'] = "Rakha";
        $this->load->view('hello_view',$data);
    }
}