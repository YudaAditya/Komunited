<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	public function index()
	{
			if ($this->session->has_userdata('user')) {
				$this->load->view('v_portofolio');
			}else {
				redirect('login');
			}
		}
}
