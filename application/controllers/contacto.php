<?php

class Contacto extends CI_Controller {


	public function contacto(){
			$data['title']='Contacto';
			$data['main_content']='contacto';
			$this->load->view('plantillas/main_template', $data);

	}

}