<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Ajuda extends Controller {
    function Ajuda() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');

    }
    function index() {
        $data['teste']='teste';
        $data['menu_superior'] = $this->load->view('menu_superior_view', null , TRUE);

        $this->load->view('ajuda_view', $data);

    }

}

?>