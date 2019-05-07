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

            $this->load->model("Evento_model");
            $data["events"] = $this->Evento_model->get_eventos();

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

            $this->load->model("Evento_model");

			if($data["member"]["member_type"] == 1)
			{
				$this->load->view('agent/new_event', $data);
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
		$this->form_validation->set_rules("nombre", "Nombre", "required|alpha");
		$this->form_validation->set_rules("responsable", "Responsable", "required");
		$this->form_validation->set_rules("lugar", "Lugar", "required");
		$this->form_validation->set_rules("fecha", "Fecha", "required");

		if($this->form_validation->run())
		{
			$this->load->model("Evento_model");
			$data = array(
				"firstname" => $this->input->post("nombre"),
				"agent" => $this->input->post("responsable"),
				"address" => $this->input->post("lugar"),
				"date" => $this->input->post("fecha")
			);

			$this->Evento_model->insert_evento($data);

			$data['redirect'] = $this->uri->segment(1);
			$data['success'] = "Create New Event Successful! Go back to event list.";
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
    
    function DeleteEvent($id)
	{
        echo'OK';
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
				$this->load->view('agent/profile');
			}
        }
        else
        {
            redirect(base_url() . 'Iniciar');
        }
    }
}
?>
