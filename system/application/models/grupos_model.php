<?php

class Grupos_model extends Model {

    var $id_grupo;
    var $tx_grupo;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('Grupo');
        return $query->result();
    }

    function get_by_id($id_grupo) {
        $this->db->where('id_grupo',$id_grupo);
        $query = $this->db->get('Grupo');
        return $query->row();
    }

    function insere_grupo($tx_nome) {
        $dados = array(
            'tx_nome' => $tx_nome,


        );
        return $this->db->insert('Grupo', $dados);

    }

    function update($id_grupo,$data) {
        $this->db->where('id_grupo', $id_grupo);
        $this->db->update('grupo',$data);
    }

    function delete($id_grupo) {
        $this->db->where('id_grupo', $id_grupo);
        $this->db->delete('grupo');
    }

	}
