<?php

class Capa extends Controller {

    function Capa() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');
    }

    function index() {
        $data['teste']='teste';
        $data2['op']= 1;
        $data['menu'] = $this->load->view("menu", $data2 , TRUE);
        $data['mainContent'] = $this->load->view("container_view", $data2 , TRUE);
        $this->load->view('capa_view', $data);
    }
}