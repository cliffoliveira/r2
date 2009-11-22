<?php

	class Bairros_model extends Model{

		var $id_bairro;
		var $tx_bairro;
		var $cd_cidade;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('bairros');
			return $query->result();
		}

		function get_by_id($id_bairro){
			$this->db->where('id_bairro',$id_bairro);
			$query = $this->db->get('bairros');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('bairros',$data);
		}

		function update($id_bairro,$data){
			$this->db->where('id_bairro', $id_bairro);
			$this->db->update('bairros',$data);
		}

		function delete($id_bairro){
			$this->db->where('id_bairro', $id_bairro);
			$this->db->delete('bairros');
		}

	}
