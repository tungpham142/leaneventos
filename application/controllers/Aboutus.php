<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('main/aboutus');
		$this->load->view('templates/footer');
	}
}
