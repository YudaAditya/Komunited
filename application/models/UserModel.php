<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function registrasi($data)
  {
    $result = $this->db->insert('userlist', $data); //nama tabel, dan data yang diambil
		return $result;
  }

	public function login($data)
	{	
		$result = $this->db->get_where('userlist', $data);
		return $result;
	}
}
