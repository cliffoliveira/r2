<?php

class Financeiro_model extends Model {

    var $id_financeiro;
    var $dt_vencimento;
    var $dt_pago;
    var $nm_valor;
    var $nm_valor_pago;
    var $fl_status;

    function __construct() {
        parent::Model();
    }

    function get_all() {
        $query = $this->db->get('Financeiro');
        return $query->result();
            }

    function get_by_id($id_financeiro) {
        $this->db->where('id_financeiro',$id_financeiro);
        $query = $this->db->get('Financeiro');
        return $query->row();
    }

    function insere_financeiro($dt_data, $tx_descricao, $nm_valor, $dt_vencimento, $cd_grupo, $cd_subgrupo) {
        $dados = array(
            'dt_data' => $dt_data,
            'tx_descricao' => $tx_descricao,
            'nm_valor' => $nm_valor,
            'dt_vencimento' => $dt_vencimento,
            'cd_grupo' => $cd_grupo,
            'cd_subgrupo' => $cd_subgrupo,
            
        );
        return $this->db->insert('Financeiro', $dados);

    }



    function delete($id_financeiro) {
        $this->db->where('id_financeiro', $id_financeiro);
        $this->db->delete('Financeiro');
    }

    function update($id_financeiro,$data) {
        $this->db->where('id_financeiro', $id_financeiro);
        $this->db->update('Financeiro',$data);
    }

	}
