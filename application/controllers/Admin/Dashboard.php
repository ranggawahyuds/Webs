<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public $folder = 'admin/';
    public $table = 'registrasi';

    public $section = 'Dashboard';
    function __construct() {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) 
        { 
            redirect(base_url('')); 
        };
        $this->load->library('form_validation');
    }

    
    function index()
    {
        $data = [
            'content' => 'admin/dashboard',
            'section' => 'Dashboard',
        ];
        $this->load->view('template/template', $data);
    }
    public function ff(){
        $data = [
            'content' => $this->folder.('dataregistrasi'),
            'section' => $this->section,
            'registrasi' => $this->Model->get_all($this->table)->result()
        ];
        $this->load->view('template/template',$data);
    }
}
