<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
public function dashboard()
{
		if ($this->session->has_userdata('user')) {
			$this->load->view('dashboard');
		}else {
			redirect('web/login');
		}
}
  public function login()
  {
    $this->load->view('login');
  }
	public function register()
	{
		$this->load->view('register');
	}
  public function input_register()
  {
		if ($this->input->post('username')) {
			$username = $this->input->post('username');
			if ($this->input->post('password') != $this->input->post('password2')) {
				echo "password tidak sama";
				return;
			}
			$pass= hash('sha256', $this->input->post('password'));
			$data = array(
				'username'=> $username,
				'password'=> $pass
			);
			$this->load->model('UserModel');
			$result = $this->UserModel->registrasi($data);
			if ($result) {
				echo $username . "berhasil registrasi";
			} else {
				echo "Gagal mendaftar";
			}

		}

  }

	public function input_login()
	{
			if ($this->input->post('username')) {
				$username= $this->input->post('username');
				$pass = hash('sha256', $this->input->post('password'));
				$data = array(
					'username =' => $username,
					'password =' => $pass
			);
			$this->load->model('UserModel');
			$result = $this->UserModel->login($data);
			if ($result->num_rows() > 0) {
				$this->session->set_userdata('user', $username);
				redirect('web/dashboard');
			} else {
				echo $username . "gagal Login";
			}
		}
	}

	public function logout($value='')
	{
		//$this->session->unset_userdata(array('user' => ''));
		$this->session->sess_destroy();
		redirect('web/index');
	}
}
