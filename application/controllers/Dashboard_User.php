<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_User extends CI_Controller {

	public function index()
	{
		if ($this->session->has_userdata('user')) {
			$this->load->view('v_anggota');
		}else {
			redirect('login');
		}
	}
	public function dashboard_komunitas()
	{
		if ($this->session->has_userdata('user')) {
			$this->load->view('dashboard');
		}else {
			redirect('login');
		}
	}
}
