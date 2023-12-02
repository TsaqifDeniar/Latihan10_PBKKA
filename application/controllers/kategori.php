<?php

class Kategori extends CI_Controller
{
  public function Burung()
  {
    $data['Burung'] = $this->model_kategori->data_Burung()->result();
    $this->load->view("templates/header");
    $this->load->view("templates/sidebar");
    $this->load->view("Burung", $data);
    $this->load->view("templates/footer");
  }

  public function anjing()
  {
    $data['anjing'] = $this->model_kategori->data_anjing()->result();
    $this->load->view("templates/header");
    $this->load->view("templates/sidebar");
    $this->load->view("anjing", $data);
    $this->load->view("templates/footer");
  }

  public function kucing()
  {
    $data['kucing'] = $this->model_kategori->data_kucing()->result();
    $this->load->view("templates/header");
    $this->load->view("templates/sidebar");
    $this->load->view("kucing", $data);
    $this->load->view("templates/footer");
  }

  public function babi()
  {
    $data['babi'] = $this->model_kategori->data_babi()->result();
    $this->load->view("templates/header");
    $this->load->view("templates/sidebar");
    $this->load->view("babi", $data);
    $this->load->view("templates/footer");
  }

  public function kambing()
  {
    $data['kambing'] = $this->model_kategori->data_kambing()->result();
    $this->load->view("templates/header");
    $this->load->view("templates/sidebar");
    $this->load->view("kambing", $data);
    $this->load->view("templates/footer");
  }
}
