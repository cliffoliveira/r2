<?php

	class Usuario_tipo_model extends Model{

		var $id_usuario_tipo;
		var $tx_tipo;
		var $tx_descricao;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('usuario_tipo');
			return $query->result();
		}

		function get_by_id($id_usuario_tipo){
			$this->db->where('id_usuario_tipo',$id_usuario_tipo);
			$query = $this->db->get('usuario_tipo');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('usuario_tipo',$data);
		}

		function update($id_usuario_tipo,$data){
			$this->db->where('id_usuario_tipo', $id_usuario_tipo);
			$this->db->update('usuario_tipo',$data);
		}

		function delete($id_usuario_tipo){
			$this->db->where('id_usuario_tipo', $id_usuario_tipo);
			$this->db->delete('usuario_tipo');
		}

	}
