<?php

class Inicio extends CI_Controller {

	public function index(){
			$data['title']='Inicio';
			$data['main_content']='inicio';
			$this->load->view('plantillas/main_template', $data);

}

}
