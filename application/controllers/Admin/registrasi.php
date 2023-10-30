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
        $config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('form_upload', $error);
		}

        $post               = $this->input->post();
         $this->form_validation->set_rules($this->Validation->val_registrasi());

        if ($this->form_validation->run() == true) {
            $data = [
                'id'            => null,
                'name'          => $post['name'],
                'jenis_kelamin' => $post['jenis_kelamin'],
                'email' => $post['email'],
                'no_hp' => $post['no_hp'],
                'alamat_domisili'=> $post['alamat_domisili'],
                'fakultas'=> $post['fakultas'],
                'program_studi'=> $post['program_studi'],
                'asal_kampus'=> $post['asal_kampus'],

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
