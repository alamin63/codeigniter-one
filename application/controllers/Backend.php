<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['main_content'] = $this->load->view('backend/main_content', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function add_post(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/add_post', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function all_post(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/all_post', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function add_page(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/add_page', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function all_page(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/all_page', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function category(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/category', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function logo_change(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/logo_change', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function footer_color_change(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/footer_color', '', TRUE);
		$this->load->view('backend/index', $data);
	}

}
