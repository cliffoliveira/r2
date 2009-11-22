<?php

	class Usuario_tipo extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Usuario_tipo_model');
		}

		function index(){
		}
	}
