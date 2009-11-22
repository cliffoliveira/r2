<?php

	class Logradouros extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Logradouros_model');
		}

		function index(){
		}
	}
