<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {


	public function selecionarUsuario($id_cliente = null) {

        if ($id_cliente != null) {
            $this->db->where("id", $id_cliente);
        }

      return $this->db->get("tb_admin"); 
    }

	public function cadastrarUsuario($data){
		$retorno = false;
		$query = $this->db->insert('tb_admin',$data);
		if($query){
			$retorno = true;
		}
		return $retorno;
	}
	public function listarCliente(){
		$result = $this->db->get('tb_admin')->result();
		if(count($result)>0){
			return $result;
		}
		return false;

	}
	public function editarUsuario($id,$data){
		$retorno = false;
		$query = $this->db->where('id',$id)->update('tb_admin',$data);
		if($query){
			$retorno = true;
		}
		return $retorno;
	}

	// public function excluir($id){
	// 	$retorno = false;
	// 	$this->db->where('id',$id);
	// 	$query = $this->db->delete('tb_admin');
	// 	if($query){
	// 		$retorno = true;
	// 	}
	// 	return $retorno;
	// }
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */