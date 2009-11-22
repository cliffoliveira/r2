<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Clientes extends Controller {
    function Clientes() {
        parent::Controller();
        $this->load->helper(array("html","url", "form"));
        $this->load->library('session');
        $this->load->model('clientes_model');

    }
    function index() {
        $data['sucesso']= 0;
        $data['teste']='teste';
        $data['tipo']= 1;
        $data['get'] = $this->clientes_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('clientes_view', $data);

    }

    function cadastro() {
        $data['teste']='teste';
        $data['tipo']= 1;
        $data["id_clientes"] = '';
        $data["tx_nome"] = '';
        $data["novo"] =  '';
        $data["nm_documento"] =  '';
        $data["tx_endereco"] =  '';
        $data["tx_bairro"] =  '';
        $data["tx_cidade"] =  '';
        $data["tx_estado"] =  '';
        $data["nm_cep"] =  '';
        $data["nm_telefone"] =  '';
        $data["tx_email"] =  '';
        $data["dt_cadastro"] =  '';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('cadastro_cliente_view', $data);


    }

    function inserir() {

        $tx_nome = $this->input->post ('tx_nome');
        $nm_documento = $this->input->post ('nm_documento');
        $tx_endereco = $this->input->post ('tx_endereco');
        $tx_bairro = $this->input->post ('tx_bairro');
        $tx_cidade = $this->input->post ('tx_cidade');
        $tx_estado = $this->input->post ('tx_estado');
        $nm_cep = $this->input->post ('nm_cep');
        $nm_telefone = $this->input->post ('nm_telefone');
        $tx_email = $this->input->post ('tx_email');
        $dt_cadastro = $this->input->post ('dt_cadastro');


        $data['sucesso']= 1;
        $this->clientes_model->insere_cliente($tx_nome, $nm_documento, $tx_endereco, $tx_bairro, $tx_cidade, $tx_estado, $nm_cep,
            $nm_telefone, $tx_email, $dt_cadastro);
        $data['get'] = $this->clientes_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('clientes_view', $data);

    }

    function delete($id_clientes) {

        $this->clientes_model->delete($id_clientes);
        $data['teste']='teste';
        $data['get'] = $this->clientes_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('clientes_view', $data);

    }

    function update($id_clientes) {

        $data["teste"] = "teste";
        $data['tipo']= 2;
        $query = $this->clientes_model->get_by_id($id_clientes);
        $data["id_clientes"] = $query->id_clientes;
        $data["tx_nome"] = $query->tx_nome;
        $data["novo"] = $query->id_clientes;
        $data["nm_documento"] = $query->nm_documento;
        $data["tx_endereco"] = $query->tx_endereco;
        $data["tx_bairro"] = $query->tx_bairro;
        $data["tx_cidade"] = $query->tx_cidade;
        $data["tx_estado"] = $query->tx_estado;
        $data["nm_cep"] = $query->nm_cep;
        $data["nm_telefone"] = $query->nm_telefone;
        $data["tx_email"] = $query->tx_email;
        $data["dt_cadastro"] = $query->dt_cadastro;

        $data["get"] = $this->clientes_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('cadastro_cliente_view', $data);
    }

    function update_ok() {

        $id = $this->input->post('id');
        $array = array('tx_nome'=>$this->input->post('tx_nome'),
                       'nm_documento'=>$this->input->post('nm_documento'),
                       'tx_endereco'=>$this->input->post('tx_endereco'),
                       'tx_bairro'=>$this->input->post('tx_bairro'),
                       'tx_cidade'=>$this->input->post('tx_cidade'),
                       'tx_estado'=>$this->input->post('tx_estado'),
                       'nm_cep'=>$this->input->post('nm_cep'),
                       'nm_telefone'=>$this->input->post('nm_telefone'),
                       'tx_email'=>$this->input->post('tx_email'),
                       'dt_cadastro'=>$this->input->post('dt_cadastro')

               );
        $this->clientes_model->update($id, $array);
        $data['sucesso']= 0;
        $data['teste']='teste';
        $data['tipo']= 1;
        $data['get'] = $this->clientes_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('clientes_view', $data);

    }


}

?>