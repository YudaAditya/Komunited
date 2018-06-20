<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		if ($this->session->has_userdata('user')) {
			$this->load->view('v_anggota');
		}else {
			redirect('login');
		}
	}

  public function event(){
		if ($this->session->has_userdata('user')) {
			$this->load->view('v_event');
		}else {
			redirect('login');
		}
  }

	public function komunitas(){
		if ($this->session->has_userdata('user')) {
			$this->load->view('v_komunitas');
		}else {
			redirect('login');
		}
  }

	public function daftarKomunitas(){

			$this->load->view('v_daftarkomunitas');

  }
}
