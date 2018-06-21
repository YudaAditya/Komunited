<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Komunitas extends CI_Controller {

	public function index()
	{
    if ($this->session->has_userdata('user')) {
			$this->load->view('dashboard');
		}else {
			redirect('login');
		}
	}
	public function buat_acara()
	{
    $this->load->view('v_post_acara');
	}
}
