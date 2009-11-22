<?php

class Clientes_model extends Model {

    var $cd_usuario;
    var $cd_logradouro;
    var $cd_subgrupo;
    var $tx_nome;
    var $nm_documento;
    var $dt_cadastro;
    var $nm_telefone;
    var $clientescol;
    var $id_clientes;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('Clientes');
        return $query->result();
    }

    function get_by_id($id_clientes) {
        $this->db->where('id_clientes',$id_clientes);
        $query = $this->db->get('Clientes');
        return $query->row();
    }

    function insere_cliente($tx_nome, $nm_documento, $tx_endereco, $tx_bairro, $tx_cidade, $tx_estado, $nm_cep,
                            $nm_telefone, $tx_email, $dt_cadastro) {
        $dados = array(
            'tx_nome' => $tx_nome,
            'nm_documento' => $nm_documento,
            'tx_endereco' => $tx_endereco,
            'tx_bairro' => $tx_bairro,
            'tx_cidade' => $tx_cidade,
            'tx_estado' => $tx_estado,
            'nm_cep' => $nm_cep,
            'nm_telefone' => $nm_telefone,
            'tx_email' => $tx_email,
            'dt_cadastro' => $dt_cadastro,
        );
        return $this->db->insert('Clientes', $dados);

    }

    function update($id_clientes,$data) {
        $this->db->where('id_clientes', $id_clientes);
        $this->db->update('Clientes',$data);
    }

    function delete($id_clientes) {
        $this->db->where('id_clientes', $id_clientes);
        $this->db->delete('Clientes');
    }

	}
