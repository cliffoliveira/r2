<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Financeiro extends Controller {
    function Financeiro() {
        parent::Controller();
        $this->load->helper(array("html","url", "form"));
        $this->load->library('session');
        $this->load->model(array('financeiro_model','grupos_model'));

    }
    function index() {
        $data['sucesso']= 0;
        
        $data['teste']='teste';
        $data['tipo']= 1;
        $data['get'] = $this->financeiro_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('financeiro_view', $data);

    }

    function cadastro() {

        $data['teste']='teste';
        $data['id_financeiro']= '';
        $data['tipo']= 1;
        $data["dt_data"] = '';
        $data["tx_descricao"] = '';
        $data["nm_valor"] = '';
        $data["dt_vencimento"] = '';
        $data["cd_grupo"] = '';
        $data["cd_subgrupo"] = '';
        $data['get'] = $this->grupos_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('cadastro_financeiro_view', $data);

    }

    function inserir() {

        $dt_data = $this->input->post ('dt_data');
        $tx_descricao = $this->input->post ('tx_descricao');
        $nm_valor = $this->input->post ('nm_valor');
        $dt_vencimento = $this->input->post ('dt_vencimento');
        $cd_grupo = $this->input->post ('cd_grupo');
        $cd_subgrupo = $this->input->post ('cd_subgrupo');


        $data['sucesso']= 1;
        $data['get'] = $this->financeiro_model->get_all();
        $this->financeiro_model->insere_financeiro($dt_data, $tx_descricao, $nm_valor, $dt_vencimento, $cd_grupo, $cd_subgrupo);
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
        $this->load->view('financeiro_view', $data);

    }

    function deletar($id_financeiro) {

        $this->financeiro_model->delete($id_financeiro);
        $data['teste']='teste';
        $data['get'] = $this->financeiro_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('financeiro_view', $data);

    }

    function update($id_financeiro) {

        $data["teste"] = "teste";
        $data['tipo']= 2;
        $query = $this->financeiro_model->get_by_id($id_financeiro);
        $data["id_financeiro"] = $query->id_financeiro;
        $data["dt_data"] = $query->dt_data;
        $data["tx_descricao"] = $query->tx_descricao;
        $data["novo"] = $query->id_financeiro;
        $data["nm_valor"] = $query->nm_valor;
        $data["dt_vencimento"] = $query->dt_vencimento;
        $data["cd_grupo"] = $query->cd_grupo;
        $data["cd_subgrupo"] = $query->cd_subgrupo;

        $data["get"] = $this->financeiro_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('cadastro_financeiro_view', $data);
    }

    function update_ok() {

        $id = $this->input->post('id');
        $array = array('dt_data'=>$this->input->post('dt_data'),
            'tx_descricao'=>$this->input->post('tx_descricao'),
            'nm_valor'=>$this->input->post('nm_valor'),
            'dt_vencimento'=>$this->input->post('dt_vencimento'),
            'cd_grupo'=>$this->input->post('cd_grupo'),
            'cd_subgrupo'=>$this->input->post('cd_subgrupo'),

        );
        $this->financeiro_model->update($id, $array);
        $data['sucesso']= 0;
        $data['teste']='teste';
        $data['tipo']= 1;
        $data['get'] = $this->financeiro_model->get_all();
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('financeiro_view', $data);

    }




}

?>