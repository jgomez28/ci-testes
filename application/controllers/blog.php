<?php

class Blog extends CI_Controller {

	public function index(){
		$this->inicio();
	}

	public function inicio(){
			$data['title']='Inicio';
			$data['main_content']='inicio';
			$this->load->view('plantillas/main_template', $data);
	}
	public function acercade(){
			$data['title']='Acerca de';
			$data['main_content']='acercade';
			$this->load->view('plantillas/main_template', $data);
	}	
	public function servicios(){
			$data['title']='Servicios';
			$data['main_content']='servicios';
			$this->load->view('plantillas/main_template', $data);
	}
	public function contacto(){
			$data['title']='Contacto';
			$data['main_content']='contacto';
			$this->load->view('plantillas/main_template', $data);
	}

}
	