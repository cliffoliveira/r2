<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Grupo extends Controller {
    function Grupo() {
        parent::Controller();
        $this->load->helper(array("html","url", "form"));
        $this->load->library('session');
        $this->load->model('grupos_model');

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
        $this->load->view('cadastro_grupo_view', $data);


    }

    function inserir() {

        $tx_nome = $this->input->post ('tx_nome');
        


        $data['sucesso']= 1;
        $this->grupos_model->insere_grupo($tx_nome);
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('financeiro_view', $data);

    }

}

?>