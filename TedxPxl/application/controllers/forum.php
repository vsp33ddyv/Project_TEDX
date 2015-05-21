<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function index(){
		$this->home();
		$this->load->database();
	}
	
	public function home(){
		$this->load->view("forum_header");
		$this->load->view("forum_homepage");
		$this->load->view("forum_footer");
		$this->load->database();
	}
}