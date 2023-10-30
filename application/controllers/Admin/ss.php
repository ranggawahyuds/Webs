<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ss extends CI_Controller
{
    public $table   = 'registrasi';
    public $section = 'registrasi';
    public $folder  = 'user/';
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect(base_url(''));
        };
    }

    public function index()
    {
        $data = [
            'content' => $this->folder . ('ss'),
            'section' => $this->section,
        ];
        $this->load->view('template/template', $data);
    }
    public function regis()
    {


        $this->form_validation->set_rules(
            'name',
            'Name',
            'required',
            ['required' => 'wajib']
        );


        if ($this->form_validation->run() == false) {
            $data = [
                'content'    => $this->folder . ('ss'),
                'section'    => $this->section,
            ];
            $this->load->view('template/template', $data);
        } else {
            $config['upload_path']          = 'assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('surat_kampus')) {
                echo "gagal";
            } else {
                $name = $this->input->post("name", TRUE);
                $file = $this->upload->data();
                $file = $file["file_name"];
                $data = [
                    'name'  => $name,
                    'surat_kampus' => $file,
                ];
                $this->Model->save($this->table, $data);
            }

           
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil di simpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/ss');
        }
    }
}
