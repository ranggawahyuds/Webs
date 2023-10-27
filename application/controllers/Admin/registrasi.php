<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi extends CI_Controller
{
    public $table   = 'registrasi';
    public $section = 'registrasi';
    public $folder  = 'user/';

    public function index()
    {
        $data = [
            'content' => $this->folder . ('registrasi'),
            'section' => $this->section,
        ];
        $this->load->view('template/template', $data);
    }
    public function regis()
    {

        $post                = $this->input->post();
        $this->form_validation->set_rules('name', 'name', 'required|trim|is_unique[registrasi.name]', [
            'required' => 'tidak boleh kosong',
            'is_unique' => 'sudah ada',
        ]);
        if ($this->form_validation->run() == True) {
            $data = [
                'id'            => null,
                'name'          => $post['name'],
                'jenis_kelamin' => $post['jenis_kelamin'],

            ];
            $this->Model->save($this->table, $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data berhasil di simpan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/registrasi');
        } else {
            $data = [
                'content'    => $this->folder . ('registrasi'),
                'section'    => $this->section
            ];
            $this->load->view('template/template', $data);
        }
    }
}
