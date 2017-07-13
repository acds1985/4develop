<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($login, $senha, $tipo) {
		
		$this->db->where('login', $login);
		$this->db->where('senha', $senha);
		$this->db->where('nivel', $tipo);


		$data = $this->db->get('tb_admin')->result();

		if (count($data) == 1) {
			return $data;
		} else {
			return false;
		}
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */