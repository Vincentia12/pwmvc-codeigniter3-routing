<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Login Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
    }

    public function daftar()
    {
        $data['judul'] = 'Daftar Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/daftar');
    }
}
