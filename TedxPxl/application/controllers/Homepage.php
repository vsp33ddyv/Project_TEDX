<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index(){
		$this->home();
		$this->load->database();
	}
	
	public function home(){
		$this->load->view("homepage");
		$this->load->database();
	}
}