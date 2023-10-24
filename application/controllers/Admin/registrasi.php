<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller
{
    public $table   = 'user';
    public $section = 'Dashboard';
    public $folder  = 'user/';
    
    public function index()
    {
        $data = [
            'content' => $this->folder.('registrasi'),
            'section' => 'Dashboard',
        ];
        $this->load->view('template/template', $data);
    }
}
