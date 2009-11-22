<?php

class Subgrupos_model extends Model {

    var $id_subgrupo;
    var $tx_subgrupo;
    var $cd_grupo;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('subgrupos');
        return $query->result();
    }

    function get_by_id($id_subgrupo) {
        $this->db->where('id_subgrupo',$id_subgrupo);
        $query = $this->db->get('subgrupos');
        return $query->row();
    }

    function insere_subgrupo($tx_nome) {
        $dados = array(
            'tx_nome' => $tx_nome,


        );
        return $this->db->insert('Subgrupo', $dados);

    }

    function update($id_subgrupo,$data) {
        $this->db->where('id_subgrupo', $id_subgrupo);
        $this->db->update('subgrupos',$data);
    }

    function delete($id_subgrupo) {
        $this->db->where('id_subgrupo', $id_subgrupo);
        $this->db->delete('subgrupos');
    }

	}
