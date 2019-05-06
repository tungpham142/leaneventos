<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main/iniciar');
		$this->load->view('templates/footer');
	}
}
