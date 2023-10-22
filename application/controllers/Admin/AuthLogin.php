<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthLogin extends CI_Controller {

	public function login() 
	{
		$this->load->view('Admin/Login');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/admin/auth.php */