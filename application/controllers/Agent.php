<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {
	function index()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/home');
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }
    
    function voluntarios()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/voluntarios');
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }
    
    function business()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/business');
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }
    
    function event()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
            $data["member"] = $this->Member_model->get_member($email);

            $this->load->model("Event_model");
            $data["events"] = $this->Event_model->get_event();

			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/event', $data);
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }

    function CreateEvent()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
            $data["member"] = $this->Member_model->get_member($email);

			$this->load->model("Event_model");

			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/new_event');
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }

    function EventValidate()
    {
        $this->load->library('form_validation');
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("responsable", "Responsable", "required");
		$this->form_validation->set_rules("lugar", "Lugar", "required");
		$this->form_validation->set_rules("fecha", "Fecha", "required");

		if($this->form_validation->run())
		{
			$this->load->model("Event_model");
			$data = array(
				"eventname" => $this->input->post("nombre"),
				"agent" => $this->input->post("responsable"),
				"address" => $this->input->post("lugar"),
				"date" => $this->input->post("fecha"),
				"hora" => $this->input->post("hora"),
				"price" => $this->input->post("boleto"),
				"link" => '/leaneventos/imagenes/nologo.png'
			);

			$this->Event_model->insert_event($data);

			$this->event();
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
    
    function DeleteEvent($id)
	{

		if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
            $data["member"] = $this->Member_model->get_member($email);

            $this->load->model("Event_model");

			if($data["member"]["member_type"] == 1)
			{
				$this->load->model('Event_model');
				$this->Event_model->delete_event($id);
				
				$this->event();
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
	}
	
	function UpdateEvent($id)
	{

		if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
            $data["member"] = $this->Member_model->get_member($email);

            $this->load->model("Event_model");

			if($data["member"]["member_type"] == 1)
			{
				$this->load->model('Event_model');
				$data['event'] = $this->Event_model->get_event($id);
				
				$this->load->view('agent/update_event', $data);
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
	}
	
	function Updated()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("responsable", "Responsable", "required");
		$this->form_validation->set_rules("lugar", "Lugar", "required");
		$this->form_validation->set_rules("fecha", "Fecha", "required");
		if($this->input->post("link") == NULL)
		{
			$link = '/leaneventos/imagenes/nologo.png';
		}
		else
		{
			$link = $this->input->post("link");
		}

		if($this->form_validation->run())
		{
			$this->load->model("Event_model");
			$id = $this->input->post("id");
			$data = array(
				"eventname" => $this->input->post("nombre"),
				"agent" => $this->input->post("responsable"),
				"address" => $this->input->post("lugar"),
				"date" => $this->input->post("fecha"),
				"hora" => $this->input->post("hora"),
				"price" => $this->input->post("boleto"),
				"description" => $this->input->post("description"),
				"link" => $link
			);

			$this->Event_model->update_event($id, $data);

			$this->event();
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

    function profile()
	{
        if($this->session->userdata('email') != '')
		{
            $this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/profile', $data);
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
			if($data["member"]["member_type"] == 1)
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
