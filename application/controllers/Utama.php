<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
    public function index()
    {
        $data['judul'] = "Halaman Utama";
        $this->load->view('utama/index', $data);
    }
}

?>