<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$this->load->view('v_anggota');
	}

  public function event(){
    $this->load->view('v_event');
  }

	public function komunitas(){
    $this->load->view('v_komunitas');
  }

	public function daftarKomunitas(){
    $this->load->view('v_daftarKomunitas');
  }
}
