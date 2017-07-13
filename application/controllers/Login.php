<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}
	
	public function index() {
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect ('Login/logout');
		}
	}

	public function login() {
		$this->form_validation->set_rules('login', 'Login', 'trim|required');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required');
		$this->form_validation->set_rules('tipo', 'Tipo', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$login = $this->input->post('login');
			$senha = $this->input->post('senha');
			$tipo = $this->input->post('tipo');

			
			$data = $this->M_login->login($login,$senha,$tipo);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Login e/ou Senha inválidos');
				redirect('Login');
			} else {

				$session = array(
				'username' => $data[0] ->login,
				'nome' => $data[0]->nome,
				'email' => $data[0]->email,
				'tipo' => $data[0]->nivel,
				'status' => $data[0]->status
				);


				$this->session->set_userdata($session);
				
				if($session['tipo']  == 1){
					redirect('Administrador');
				}else if($session['tipo'] == 2){
					redirect('Usuarios');
				}else if($session['tipo'] == 3){
					redirect('Usuarios');
				}else if($session['tipo'] == 4){
					redirect('Professor');
				}else if($session['tipo'] == 5){
					redirect('Aluno');
				};	
			};
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */