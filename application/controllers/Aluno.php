<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_usuarios');

	}

	public function index() {
		
		$data['page'] 			= "home";
		$data['descricao'] 		= "Aluno - HOME";
		$this->template->views2('telas_usuarios/usuario', $data);
	}

	
	
}