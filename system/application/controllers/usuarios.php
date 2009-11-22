<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuarios extends Controller {
    function Usuarios() {
        parent::Controller();
        $this->load->helper(array("html","url","form"));
        $this->load->library('session');
        $this->load->model('usuarios_model');

    }
    function index() {
        $data['sucesso']= 0;
        $data['teste']='teste';
        $data['get'] = $this->usuarios_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('usuarios_view', $data);

    }

   function cadastro() {
        $data['teste']='teste';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('cadastro_usuario_view', $data);


    }

    function inserir() {

        $tx_nome = $this->input->post ('tx_nome');
        $tx_login = $this->input->post ('tx_login');
        $tx_senha = $this->input->post ('tx_senha');
        $data['sucesso']= 1;
        $this->usuarios_model->insere_usuario($tx_nome, $tx_login, $tx_senha);
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
         $this->load->view('usuarios_view', $data);

    }

    function deletar($id_usuario) {

        $this->usuarios_model->delete($id_usuario);
        $data['teste']='teste';
        $data['get'] = $this->usuarios_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('usuarios_view', $data);

    }
}

?>