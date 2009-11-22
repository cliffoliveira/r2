<?php

	class Bairros extends Controller{

		function __construct(){
			parent::Controller();
			$this->load->model('Bairros_model');
		}

		function index(){
		}
	}
