<?php

class Layanan extends CI_Controller
{
    public function ketersediaan()
    {
        $data['judul'] = 'Ketersediaan Tempat Tidur';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/ketersediaan');
        $this->load->view('templates/footer');
    }

    public function daftaronline()
    {
        $data['judul'] = 'Daftar Online';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/daftaronline');
        $this->load->view('templates/footer');
    }

    public function konsultasi()
    {
        $data['judul'] = 'Halaman Konsultasi Online';
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/konsultasi');
        $this->load->view('templates/footer');
    }
}
