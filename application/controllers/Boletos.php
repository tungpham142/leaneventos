<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boletos extends CI_Controller {
	public function index()
	{
        $this->load->model("Event_model");
        $data["events"] = $this->Event_model->get_event();

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
            $this->load->model("Event_model");
            $data["event"] = $this->Event_model->get_event($id);

            $this->load->view('templates/header');
            $this->load->view('main/event_detail', $data);
            $this->load->view('templates/footer');
        }   
    }
}
