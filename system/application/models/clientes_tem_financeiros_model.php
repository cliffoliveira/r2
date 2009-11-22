<?php

	class Clientes_tem_financeiros_model extends Model{

		var $clientes_id_cliente;
		var $financeiros_id_financeiro;

		function __construct(){
			parent::Model();
		}

		function get_all(){
			$query = $this->db->get('clientes_tem_financeiros');
			return $query->result();
		}

		function get_by_id($financeiros_id_financeiro){
			$this->db->where('financeiros_id_financeiro',$financeiros_id_financeiro);
			$query = $this->db->get('clientes_tem_financeiros');
			return $query->row();
		}

		function insert($data){
			$this->db->insert('clientes_tem_financeiros',$data);
		}

		function update($financeiros_id_financeiro,$data){
			$this->db->where('financeiros_id_financeiro', $financeiros_id_financeiro);
			$this->db->update('clientes_tem_financeiros',$data);
		}

		function delete($financeiros_id_financeiro){
			$this->db->where('financeiros_id_financeiro', $financeiros_id_financeiro);
			$this->db->delete('clientes_tem_financeiros');
		}

	}
