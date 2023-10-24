<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{



    public $section = 'Dashboard';
    
    function index()
    {
        $data = [
            'content' => 'admin/dashboard',
            'section' => 'Dashboard',
        ];
        $this->load->view('template/template', $data);
    }
}
