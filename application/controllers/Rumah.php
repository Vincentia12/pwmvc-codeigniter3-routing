<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('rumah');
        $this->load->view('templates/footer');
    }

    public function notFound()
    {
        echo "Halaman Tidak Ditemukan";
    }
}
