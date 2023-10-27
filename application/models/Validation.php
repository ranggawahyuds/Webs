<?php
defined('BASEPATH') or exit('No script direct access allowed');

class Validation extends CI_Model
{

	public function val_login()
	{
		return [
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> harus diisi.'],
			],
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => '<b>%s</b> harus diisi.']
			]
		];
	}

	public function val_user()
	{
		return [
			[
				'field'	=> 'name',
				'label'	=> 'Nama Lengkap',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim|matches[confirm_password]|min_length[4]",
				'errors' => [
					'required'	=> 'Form <b>%s</b> harus diisi',
					'matches'		=> '<b>Password</b> tidak cocok',
					'min_length' => 'Pangjang <b>%s<b/> minimal 4 karakter'
				],
			],
			[
				'field'	=> 'confirm_password',
				'label'	=> 'Password',
				'rules'	=> "required|rtrim",
			]
		];
	}

	public function val_registrasi()
	{
		return [
			[
				'field'	=> 'name',
				'label'	=> 'Nama Lengkap',
				'rules'	=> 'required|rtrim|is_unique[registrasi.name]',
				'errors' => [
					'required' 	=> 'Form <b>%s</b> tidak boleh kosong',
					'is_unique'	=> 'Nama Tarif sudah ada.'
				]
			],
			[
				'field'	=> 'nim',
				'label'	=> 'Nim',
				'rules'	=> 'required|rtrim|is_unique[registrasi.nim]',
				'errors' => [
					'required' => 'Form <b>%s</b> tidak boleh kosong.',
					'is_unique' => 'Nim sudah ada',
				]
			],
			[
				'field'	=> 'email',
				'label'	=> 'Email',
				'rules'	=> 'required|rtrim|valid_email|is_unique[registrasi.email]',
				'errors' => [
					'required' => 'Form <b>%s</b> tidak boleh kosong.',
					'valid_email' => 'Form <b>%s</b> tidak benar',
					'is_unique'=> 'Email sudah terdaftar'
				]
			],
			[
				'field'	=> 'no_hp',
				'label'	=> 'No Telp',
				'rules'	=> 'required|rtrim|is_unique[registrasi.no_hp]',
				'errors' => [
					'required' => 'Form <b>%s</b> tidak boleh kosong.',
					'is_unique'=> 'No Telp sudah terdaftar',
					]
			],
			[
				'field'	=> 'alamat_domisili',
				'label'	=> 'Alamat Domisili',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'fakultas',
				'label'	=> 'Fakultas',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'program_studi',
				'label'	=> 'Program Studi',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'asal_kampus',
				'label'	=> 'Asal Kampus',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			],
			[
				'field'	=> 'lama_magang',
				'label'	=> 'Lama Magang',
				'rules'	=> 'required|rtrim',
				'errors' => ['required' => 'Form <b>%s</b> tidak boleh kosong.']
			]
		];
	}
}
