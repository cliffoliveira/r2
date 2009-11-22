<?php

	class Cidades extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Cidades_model');
		}

		function index(){
		}
	}
