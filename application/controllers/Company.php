<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
		$this->load->model('mr_company');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
    }
	
	public function index(){
		
		$data['querys'] = $this->mr_company->INFO();
		$this->load->view('company/view',$data);
		
	}
	
	public function edit(){
		
		$values = $this->mr_company->INFO();
			$data['uid'] 			= 'NEW';
			$data['name'] 			= '';
			$data['address'] 		= '';
			$data['person'] 		= '';
			$data['designation']	= '';
			$data['email'] 			= '';
			$data['phone'] 			= '';
			$data['comment'] 		= '';
		foreach($values as $value){
			if($value->uid == $this->uri->segment(3)){
				$data['uid'] 			= $value->uid;
				$data['name'] 			= $value->name;
				$data['address'] 		= $value->address;
				$data['person'] 		= $value->person;
				$data['designation']	= $value->designation;
				$data['email'] 			= $value->email;
				$data['phone'] 			= $value->phone;
				$data['comment'] 		= $value->comment;
			}
		}
		
		
		
		$this->form_validation->set_rules('name', 'Company Name', 'required|max_length[30]');
		$this->form_validation->set_rules('address', 'Company Address', 'required|max_length[200]');
		$this->form_validation->set_rules('person', 'Contact Person', 'required|max_length[30]');
		$this->form_validation->set_rules('designation', 'Designation', 'required|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|max_length[30]');
		$this->form_validation->set_rules('comment', 'Comment', 'required|max_length[250]');
		if ($this->form_validation->run() == FALSE){
            $this->load->view('company/edit',$data);
        }else{
			if($this->input->post('uid') == 'NEW'){
				$data['name'] 			= $this->input->post('name');
				$data['address'] 		= $this->input->post('address');
				$data['person'] 		= $this->input->post('person');
				$data['designation']	= $this->input->post('designation');
				$data['email'] 			= $this->input->post('email');
				$data['phone'] 			= $this->input->post('phone');
				$data['comment'] 		= $this->input->post('comment');
				$this->mr_company->ADD($data);
            }else{
				$data['uid'] 			= $this->input->post('uid');
				$data['name'] 			= $this->input->post('name');
				$data['address'] 		= $this->input->post('address');
				$data['person'] 		= $this->input->post('person');
				$data['designation']	= $this->input->post('designation');
				$data['email'] 			= $this->input->post('email');
				$data['phone'] 			= $this->input->post('phone');
				$data['comment'] 		= $this->input->post('comment');
				$this->mr_company->EDIT($data);
			}
			$this->load->view('errors/success');
        }
		
	}
	
	public function trash(){
		
		$values = $this->mr_company->INFO();
		foreach($values as $value){
			if($value->uid == $this->uri->segment(3)){
				$data['uid'] = $this->uri->segment(3);
				$this->mr_company->TRASH($data);
				$this->load->view('errors/success');
			}
		}
		
	}
	

	
	
	
}