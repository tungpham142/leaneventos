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
            
            $this->load->model('Evento_model');
            $data["eventos"] = $this->Evento_model->get_eventos();

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
