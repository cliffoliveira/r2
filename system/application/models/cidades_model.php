<?php

	class Cidades_model extends Model{

		var $id_cidade;
		var $tx_cidade;
		var $cd_estado;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('cidades');
			return $query->result();
		}

		function get_by_id($id_cidade){
			$this->db->where('id_cidade',$id_cidade);
			$query = $this->db->get('cidades');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('cidades',$data);
		}

		function update($id_cidade,$data){
			$this->db->where('id_cidade', $id_cidade);
			$this->db->update('cidades',$data);
		}

		function delete($id_cidade){
			$this->db->where('id_cidade', $id_cidade);
			$this->db->delete('cidades');
		}

	}
