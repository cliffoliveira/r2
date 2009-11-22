<?php

	class Estados_model extends Model{

		var $id_estado;
		var $tx_estado;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('estados');
			return $query->result();
		}

		function get_by_id($id_estado){
			$this->db->where('id_estado',$id_estado);
			$query = $this->db->get('estados');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('estados',$data);
		}

		function update($id_estado,$data){
			$this->db->where('id_estado', $id_estado);
			$this->db->update('estados',$data);
		}

		function delete($id_estado){
			$this->db->where('id_estado', $id_estado);
			$this->db->delete('estados');
		}

	}
