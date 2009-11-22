<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Principal extends Controller {
    function Principal() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');

    }
    function index() {
        $data['titulo'] = 'Principal';
        $this->load->view('menu_superior_view',$data);
        $this->load->view('rosto_view',$data);

    }

}

?>