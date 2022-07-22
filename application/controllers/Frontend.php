<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$data = [];
		$data['main_page'] = $this->load->view('frontend/main_page', '', TRUE);
		$this->load->view('frontend/index', $data);
	}

	public function single_page(){
		$data = [];
		$data['main_page'] = $this->load->view('frontend/single', '', TRUE);
		$this->load->view('frontend/index', $data);
	}

	public function page(){
		$data = array();
		$data['main_page'] = $this->load->view('frontend/page', '', TRUE);
		$this->load->view('frontend/index', $data);
	}

	public function contact(){
		$data = array();
		$data['main_page'] = $this->load->view('frontend/contact', '', TRUE);
		$this->load->view('frontend/index', $data);
	}
}
