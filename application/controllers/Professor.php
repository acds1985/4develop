<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_usuarios');

	}

	public function index() {
		
		$data['page'] 			= "home";
		$data['descricao'] 		= "Professor - HOME";
		$this->template->views2('telas_usuarios/usuario', $data);
	}

	
}