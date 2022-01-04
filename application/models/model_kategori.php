<?php

class model_kategori extends CI_Model{

    public function data_elektronik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
    }

    public function data_tambahan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'tambahan'));
    }

    public function data_bahan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'bahan'));
    }

    public function data_cat()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'cat'));
    }
}