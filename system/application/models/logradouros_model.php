<?php

	class Logradouros_model extends Model{

		var $id_logradouro;
		var $cd_bairro;
		var $tx_endereco;
		var $tx_complemento;
		var $nm_cep;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('logradouros');
			return $query->result();
		}

		function get_by_id($id_logradouro){
			$this->db->where('id_logradouro',$id_logradouro);
			$query = $this->db->get('logradouros');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('logradouros',$data);
		}

		function update($id_logradouro,$data){
			$this->db->where('id_logradouro', $id_logradouro);
			$this->db->update('logradouros',$data);
		}

		function delete($id_logradouro){
			$this->db->where('id_logradouro', $id_logradouro);
			$this->db->delete('logradouros');
		}

	}
