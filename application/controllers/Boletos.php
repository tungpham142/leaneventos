<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boletos extends CI_Controller {
	public function index()
	{
        $this->load->model("boletos_model");
        $data["events"] = $this->boletos_model->get_events();

		$this->load->view('templates/header');
		$this->load->view('main/boletos', $data);
		$this->load->view('templates/footer');
    }
    
    public function detail($id = NULL)
    {
        if($id == NULL)
        {
            exit('No direct script access allowed');
        }
        else
        {
            $this->load->model("boletos_model");
            $data["event"] = $this->boletos_model->get_events($id);

            $this->load->view('templates/header');
            $this->load->view('main/event_detail', $data);
            $this->load->view('templates/footer');
        }   
    }
}
