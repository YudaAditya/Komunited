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
	public function tambah_komunitas()
	{
		$this->load->view('v_tambahkomunitas');
	}

	public function daftar_komunitas()
	{
		if ($this->input->post('namakomunitas')) {
			$namakomunitas= $this->input->post('namakomunitas');
			$email = $this->input->post('email');
			$kontak= $this->input->post('kontak');
			$kategori= $this->input->post('selectbox');
			$biodata= $this->input->post('biodata');
			$alamat= $this->input->post('alamat');
			$userlog= $this->session->userdata('user');
			$hasil = $this->db->query("select * from user where username=?",$userlog);
			$hasil2 = $hasil->row();
			$hasil3= $hasil2->username;
			/*$emails= $this->db->query("select * from komunitas where email='".$email."'");
			if(($emails->num_rows())>0){
				echo "duplicate email";
				return;
			}*/
			$usernamedup= $this->db->query("select * from komunitas where nama_komunitas='".$namakomunitas."'");
			if (($usernamedup->num_rows())>0) {
				echo "Komunitas telah terdaftar";
				return;
			}

			$data = array(
				'nama_komunitas'=> $namakomunitas,
				'email'=> $email,
				'kontak'=> $kontak,
				'alamat'=> $alamat,
				'id_kategori'=> $kategori,
				'bio'=> $biodata,
				'admin'=> $hasil3
			);

			$this->load->model('Usermodel');
			$result = $this->Usermodel->add_komunitas($data);
			if ($result) {
				redirect('dashboard_user/dashboard_komunitas');
			} else {
				echo "Gagal mendaftar";
			}
		}
	}
}
