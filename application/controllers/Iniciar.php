<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main/iniciar');
		$this->load->view('templates/footer');
	}

	function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			$email = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('Member_model');
			if($this->Member_model->can_login($email,$password))
			{
				$session_data = array(
					'email' => $email
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Iniciar/logedin');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Email or Password');
				redirect(base_url() . 'Iniciar');
			}
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

	function logedin()
	{
		if($this->session->userdata('email') != '')
		{
			$this->load->model('Member_model');
			$email = $this->session->userdata('email');
			$data["member"] = $this->Member_model->get_member($email);
			if($data["member"]["member_type"] == 1)
			{
				redirect(base_url() . 'Agent');
			}
			if($data["member"]["member_type"] == 2)
			{
				$this->load->view('business/home');
			}
			if($data["member"]["member_type"] == 3)
			{
				$this->load->view('individual/home');
			}
		}
		else
		{
			redirect(base_url() . 'Iniciar');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		redirect(base_url() . 'Iniciar');
	}
}
