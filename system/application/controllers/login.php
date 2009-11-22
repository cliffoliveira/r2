<?php

class Login extends Controller {

    function Login() {
        parent::Controller();
        $this->load->helper(array("html","url"));
        $this->load->library('session');
    }

    function index() {
        $data['teste']='teste';
        $data2['op']= 1;
        $data['menu'] = $this->load->view("menu", $data2 , TRUE);
        $data['mainContent'] = $this->load->view("login_view", $data2 , TRUE);
        $this->load->view('capa_view', $data);
    }
    function autentica() {
        $data['teste']='teste';
        $data2['op']= 1;
        $data['menu'] = $this->load->view("menu", $data2 , TRUE);
        $data['mainContent'] = $this->load->view("autentica_view", $data2 , TRUE);
        $this->load->view('capa_view', $data);
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */