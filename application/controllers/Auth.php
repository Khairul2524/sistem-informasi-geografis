<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
    {
        $data['judul'] = "Login";
        $this->load->view('templates/auth_header',  $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }



}