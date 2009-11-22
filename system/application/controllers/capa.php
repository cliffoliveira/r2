<?php

class Capa extends Controller {

    function Capa() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');
    }

    function index() {
        $data['teste']='teste';
        
         
        $this->load->view('capa_view', $data);
    }
}