<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
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
			redirect ('Dashboard_User');
		} else {
			echo $username . "gagal Login";
		}
	}
}
