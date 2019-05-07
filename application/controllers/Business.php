<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {
	function index()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 2)
			{
                $this->load->model('Event_model');
                $data['events'] = $this->Event_model->get_event();
				$this->load->view('business/home', $data);
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }

    function Profile()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 2)
			{
				$this->load->view('business/profile', $data);
            }
            else{
                redirect(base_url() . 'Iniciar');
            }
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
	}

    function UpdateProfile()
	{

		if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 2)
			{
				$this->load->library('form_validation');
				$this->form_validation->set_rules("nombre", "Nombre", "required");
				$this->form_validation->set_rules("apellido", "Apellido", "required");
				$this->form_validation->set_rules("correo", "Correo", "required|valid_email");
				$this->form_validation->set_rules("contrasena", "Contraseña", "required");

				if($this->form_validation->run())
				{
					$id = $data["member"]["id"];
					$data = array(
						"firstname" => $this->input->post("nombre"),
						"lastname" => $this->input->post("apellido"),
						"email" => $this->input->post("correo"),
						"phone" => $this->input->post("telefono"),
						"username" => $this->input->post("usuario"),
						"password" => $this->input->post("contrasena")
					);

					$this->Member_model->update_member($id, $data);

					$this->profile();
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
        else
        {
            redirect(base_url() . 'Iniciar');
        }		
	}
}
?>