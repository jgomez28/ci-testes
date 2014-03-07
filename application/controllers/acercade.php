<?php

class Acercade extends CI_Controller {

	public function acercade(){
			$data['title']='Acerca de';
			$data['main_content']='acercade';
			$this->load->view('plantillas/main_template', $data);
	}	
}