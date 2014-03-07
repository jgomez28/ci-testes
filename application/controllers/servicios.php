<?php

class Servicios extends CI_Controller {

	public function servicios(){
			$data['title']='Servicios';
			$data['main_content']='servicios';
			$this->load->view('plantillas/main_template', $data);
	}
}