<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main/contacto');
		$this->load->view('templates/footer');
	}

	function Validate()
    {
        $this->load->library('form_validation');
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("apellido", "Apellido", "required");
		$this->form_validation->set_rules("correo", "Correo", "required");
		$this->form_validation->set_rules("tema", "Tema", "required");

		if($this->form_validation->run())
		{
			$this->load->model("Contact_model");
			$data = array(
				"firstname" => $this->input->post("nombre"),
				"lastname" => $this->input->post("apellido"),
				"title" => $this->input->post("tema"),
				"email" => $this->input->post("correo"),
				"message" => $this->input->post("mensaje")
			);

			$this->Contact_model->insert_contact($data);

			$data['redirect'] = $this->uri->segment(1);
			$data['success'] = "Message Sent Successful!";
			$this->load->view('templates/header');
			$this->load->view('templates/result', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['redirect'] = $this->uri->segment(1);
			$data['success'] = FALSE;
			$this->load->view('templates/header');
			$this->load->view('templates/result', $data);
			$this->load->view('templates/footer');
		}
    }
}
