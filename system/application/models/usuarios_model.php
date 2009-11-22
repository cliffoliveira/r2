<?php

class Usuarios_model extends Model {

    var $id_usuario;
    var $cd_usuario_tipo;
    var $tx_login;
    var $tx_email;
    var $tx_senha;
    var $tx_chave;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('Usuarios');
        return $query->result();
    }

    function get_by_id($id_usuario) {
        $this->db->where('id_usuario',$id_usuario);
        $query = $this->db->get('usuarios');
        return $query->row();
    }


    function insere_usuario($tx_nome, $tx_login, $tx_senha) {
        $dados = array(
            'tx_nome' => $tx_nome,
            'tx_login' => $tx_login,
            'tx_senha' => $tx_senha
        );
        return $this->db->insert('Usuarios', $dados);

    }


        function update($id_usuario,$data) {
            $this->db->where('id_usuario', $id_usuario);
            $this->db->update('usuarios',$data);
        }

        function delete($id_usuario) {
            $this->db->where('id_usuario', $id_usuario);
            $this->db->delete('Usuarios');
        }

    }
