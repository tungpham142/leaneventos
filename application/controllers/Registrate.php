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
			$this->load->model("Member_model");
			$data = array(
				"email" => $this->input->post("correo"),
				"password" => $this->input->post("contrasena"),
				"firstname" => $this->input->post("nombre"),
				"lastname" => $this->input->post("apellido"),
				"address" => $this->input->post("direccion"),
				"city" => $this->input->post("ciudad"),
				"state" => $this->input->post("estado"),
				"zip" => $this->input->post("postal"),
				"member_type" => $this->input->post("form_type")
			);

			$this->Member_model->insert_member($data);

			$data['redirect'] = $this->uri->segment(1);
			$data['success'] = "Registration Successful! Please Login";
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
?>