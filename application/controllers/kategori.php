<?php

class Kategori extends CI_Controller{
    
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function tambahan()
    {
        $data['tambahan'] = $this->model_kategori->data_tambahan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tambahan', $data);
        $this->load->view('templates/footer');
    }

    public function bahan()
    {
        $data['bahan'] = $this->model_kategori->data_bahan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bahan', $data);
        $this->load->view('templates/footer');
    }

    public function cat()
    {
        $data['cat'] = $this->model_kategori->data_cat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cat', $data);
        $this->load->view('templates/footer');
    }
}