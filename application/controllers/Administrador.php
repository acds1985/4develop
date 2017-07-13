<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');

	}

	public function index() {
		
		$data['page'] 			= "home";
		$data['descricao'] 		= "Painel Administrativo";
		$this->template->views('telas_administrador/administrador', $data);
	}

	public function listarUsuarios(){

		$data['usuarios'] = $this->M_admin->listarCliente();		
		$data['page'] 			= "usuarios";
		$data['descricao'] 		= "Comissão de Avaliadores";
		//$this->load->view('telas_administrador/listar_usuarios2', $data);
		$this->template->views('telas_administrador/listar_usuarios', $data);


	}
	public function dadosUsuarioEditar(){
		
		$id_cliente = $this->input->post("id_cliente");
		$consulta = $this->M_admin->selecionarUsuario($id_cliente);
		$array_clientes = array(

			"id_cliente" => $consulta->row()->id,
			"nome" => $consulta->row()->nome,
			"email" => $consulta->row()->email,
			"login" => $consulta->row()->login,
			"senha" => $consulta->row()->senha
			
			);
		
		/*
		 * Após os índices criados para o formato jSon, dou um echo no jsonEcode da array acima.
		 */
		echo json_encode($array_clientes);
		
	}

	public function cadastrarUsuario(){

		$id_cliente= $this->input->post("id");
		$nome= $this->input->post("nome");
		$email = $this->input->post("email");
		$login = $this->input->post("login");
		$senha = $this->input->post("senha");
		$nivel = 1;
		$status = 1;

		$dados_cliente = array(

			"nome" => $nome,
			"email" => $email,
			"login" => $login,
			"senha" => $senha,
			"nivel" => $nivel,
			"status" => $status

			);

		if($id_cliente==null){

			if ($this->M_admin->cadastrarUsuario($dados_cliente)) {	
				redirect('Administrador/listarUsuarios','refresh');
			}else {
				echo 'Erro ao cadastrar.';
			}

		}else{
			if ($this->M_admin->editarUsuario($id_cliente,$dados_cliente)) {	
				redirect('Administrador/listarUsuarios','refresh');
			}else {
				echo 'Erro ao cadastrar.';
			}

		}
	}

		public function criarQuestionario(){

		$data['page'] 			= "questionario";
		$data['descricao'] 		= "Criar Questionário";
		$this->template->views('telas_administrador/criarQuestionario', $data);

		
	}
}