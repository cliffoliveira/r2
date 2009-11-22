<?php

	class Clientes_tem_financeiros extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Clientes_tem_financeiros_model');
		}

		function index(){
		}
	}
