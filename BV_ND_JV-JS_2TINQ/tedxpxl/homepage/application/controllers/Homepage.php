<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	
	function __construct()
		{
			parent::__construct();
		}
	
	public function index(){
		$this->home();
		$this->load->database();
	}
	
	
	
	public function home(){
		$this->load->view("header");
		$this->load->view("homepage");
		$this->load->model("Mycal_model");
		$this->load->helper('form');
		
		
		$data['calendar'] = $this->Mycal_model->generate($year = null, $month = null);
		$this->load->view('mycal',$data);
		

		$this->load->view("footer");
		$this->load->database();
		$this->load->database();	
	}
	
	function view_list($page){
	 $this->load->view($page);
	}
	
	public function form_helper(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Form Helper Title';
		$date['page_header'] = 'Form_Helpers in Codeigniter';

		$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('url','URL','required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('view_form_helper',$data);
			} else {
				$data['email'] = $this->input->post('email');
				$date['password'] = $this->input->post('password');
				$data['pass_length'] = strlen($this->input->post('password'));
				$data['url'] = $this->input->post('url');
				$this->load->view('view_form_helper',$data);
			}
		}
			function display(){
		$this->load->model('Mycal_model');	
		if(!$year){
		$year = date('Y');
		}
		if(!$month){
		$month = date('M');
		}
		if($day = $this->input->post('day')){
			$this->mycal_model->add_calendar_data(
			"$year-$month-$day", //$datum
			$this->input->post('data')
			);
		}
}
}