<?php

class Rosto extends Controller {

    function Rosto() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');
    }

    function index() {
        $data['teste']='teste';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);
         
        $this->load->view('rosto_view', $data);
    }
}