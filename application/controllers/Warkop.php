<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warkop extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
public function dashboard()
{
		if ($this->session->has_userdata('user')) {
			$this->load->view('dashboard');
		}else {
			redirect('warkop/login');
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
			$email = $this->input->post('email');
			$jabatan= $this->input->post('selectbox');

			if ($this->input->post('password') != $this->input->post('password2')) {
				echo "password tidak sama";
				return;
			}
			$emails= $this->db->query("select * from userlist where email='".$email."'");
			if(($emails->num_rows())>0){
				echo "duplicate email";
				return;
			}
			$usernamedup= $this->db->query("select * from userlist where username='".$username."'");
			if (($usernamedup->num_rows())>0) {
				echo "duplicate Username";
				return;
			}
			$pass= hash('sha256', $this->input->post('password'));
			$data = array(
				'username'=> $username,
				'email'=> $email,
				'password'=> $pass,
				'jabatan'=> $jabatan
			);
			$this->load->model('Usermodel');
			$result = $this->Usermodel->registrasi($data);
			if ($result) {
				redirect('warkop/login');
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
				redirect ('warkop/dashboard');
			} else {
				echo $username . "gagal Login";
			}
		}
	}

	public function logout()
	{
		//$this->session->unset_userdata(array('user' => ''));
		$this->session->sess_destroy();
		redirect('warkop/index');
	}
}
