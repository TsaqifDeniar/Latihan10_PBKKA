<?php

class Model_kategori extends CI_Model
{
  public function data_Burung()
  {
    return $this->db->get_where("tb_barang", array("kategori" => "Burung"));
  }

  public function data_anjing()
  {
    return $this->db->get_where("tb_barang", array("kategori" => "anjing"));
  }

  public function data_kucing()
  {
    return $this->db->get_where("tb_barang", array("kategori" => "kucing"));
  }

  public function data_babi()
  {
    return $this->db->get_where("tb_barang", array("kategori" => "babi"));
  }

  public function data_kambing()
  {
    return $this->db->get_where("tb_barang", array("kategori" => "kambing"));
  }
}
