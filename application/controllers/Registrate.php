<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrate extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main/registrate');
		$this->load->view('templates/footer');
	}

	public function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("correo", "Correo", "required|valid_email");
		$this->form_validation->set_rules("contrasena", "Contrasena", "required");
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("apellido", "Apellido", "required");

		if($this->form_validation->run())
		{
			echo 'ok';
		}
		else
		{
			$data['redirect'] = $this->uri->segment(1);
			$this->load->view('templates/header');
			$this->load->view('templates/error', $data);
			$this->load->view('templates/footer');
		}
	}
}
?>