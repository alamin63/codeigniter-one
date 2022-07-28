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
		$data['category_info'] = $this->custom_model->manage_category_info();
		$data['main_content'] = $this->load->view('backend/add_post', $data, TRUE);
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

	public function add_category(){
		$data = array();
		$data['main_content'] = $this->load->view('backend/add_category', '', TRUE);
		$this->load->view('backend/index', $data);
	}

	public function manage_category(){
		$data = array();
		$data['category_info'] = $this->custom_model->manage_category_info();
		$data['main_content'] = $this->load->view('backend/manage_category', $data, TRUE);
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

	public function save_category(){
		$this->custom_model->save_category_info();
		$sdata = array();
		$sdata['message'] = "Successfully Inserted Category.";
		$this->session->set_userdata($sdata);
		redirect('add-category');
	}

	public function edit_category($id){
		$data = array();
		$data['category_id_info'] = $this->custom_model->edit_category_by_id($id);
		$data['main_content'] = $this->load->view('backend/edit_category', $data, TRUE);
		$this->load->view('backend/index', $data);
	}

	public function update_category(){
		$this->custom_model->update_category_by_id();
		$sdata = array();
		$sdata['message'] = "Data updated successfully.";
		$this->session->set_userdata($sdata);
		redirect ('manage-category');
	}

	public function delete_category($id){
		$this->custom_model->delete_category_by_id($id);
		$sdata = array();
		$sdata['message'] = "Delete Category Successfully.";
		$this->session->set_userdata($sdata);
		redirect('manage-category');
	}
}
