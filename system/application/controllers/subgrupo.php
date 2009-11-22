<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Subgrupo extends Controller {
    function Subgrupo() {
        parent::Controller();
        $this->load->helper(array("html","url", "form"));
        $this->load->library('session');
        $this->load->model('subgrupos_model');

    }
    function index() {
        $data['sucesso']= 0;
        $data['teste']='teste';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('grupos_view', $data);

    }

    function cadastro() {
        $data['teste']='teste';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('cadastro_subgrupo_view', $data);


    }

    function inserir() {

        $tx_nome = $this->input->post ('tx_nome');



        $data['sucesso']= 1;
        $this->subgrupos_model->insere_subgrupo($tx_nome);
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('financeiro_view', $data);

    }

}

?>