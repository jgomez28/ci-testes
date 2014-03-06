<?php

class Blog extends CI_Controller {

	public function index(){
			$this->load->view('principal');
	}
	public function acercade(){
			$this->load->view('acercade');
	}	
	public function servicios(){
			$this->load->view('servicios');
	}
	public function contacto(){
			$this->load->view('contacto');
	}

}
	