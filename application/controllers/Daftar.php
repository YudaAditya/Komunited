<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}

  public function registrasi()
  {
    if ($this->input->post('username')) {
      $username = $this->input->post('username');
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $pass= hash('sha256', $this->input->post('password'));
      $no_hp= $this->input->post('nomorhp');
			$jenis_kelamin= $this->input->post('selectbox');

			if ($this->input->post('password') != $this->input->post('password2')) {
				echo "password tidak sama";
				return;
			}
			$emails= $this->db->query("select * from user where email='".$email."'");
			if(($emails->num_rows())>0){
				echo "duplicate email";
				return;
			}
			$usernamedup= $this->db->query("select * from user where username='".$username."'");
			if (($usernamedup->num_rows())>0) {
				echo "duplicate Username";
				return;
			}

			$data = array(
				'username'=> $username,
        'nama'=> $nama,
				'email'=> $email,
				'password'=> $pass,
        'no_hp'=> $no_hp,
				'jenis_kelamin'=> $jenis_kelamin
			);
			$this->load->model('Usermodel');
			$result = $this->Usermodel->registrasi($data);
			if ($result) {
				redirect('login');
			} else {
				echo "Gagal mendaftar";
			}
  }
}
	public function tambah_komunitas($value='')
	{
		$this->load->view('v_tambahkomunitas');
	}
	public function daftar_komunitas()
	{
		if ($this->input->post('username')) {
			$username = $this->input->post('username');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pass= hash('sha256', $this->input->post('password'));
			$no_hp= $this->input->post('nomorhp');
			$jenis_kelamin= $this->input->post('selectbox');

			if ($this->input->post('password') != $this->input->post('password2')) {
				echo "password tidak sama";
				return;
			}
			$emails= $this->db->query("select * from user where email='".$email."'");
			if(($emails->num_rows())>0){
				echo "duplicate email";
				return;
			}
			$usernamedup= $this->db->query("select * from user where username='".$username."'");
			if (($usernamedup->num_rows())>0) {
				echo "duplicate Username";
				return;
			}

			$data = array(
				'username'=> $username,
				'nama'=> $nama,
				'email'=> $email,
				'password'=> $pass,
				'no_hp'=> $no_hp,
				'jenis_kelamin'=> $jenis_kelamin
			);
			$this->load->model('Usermodel');
			$result = $this->Usermodel->registrasi($data);
			if ($result) {
				redirect('login');
			} else {
				echo "Gagal mendaftar";
			}
		}
	}
}
