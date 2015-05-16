<?
	session_start(); //sessie starten om deze controller te starten
	
	Class User_authentication extends CI_Controller(){
		 public function__construct(){
			 parent::construct();
		 
		 
		 //load from helper libary
		 $this->load->helper('form');
		 
		 //load form helper validation libary
		 $this->load->library('form_validation');
		 
		 //load session libary
		 $this->load->library('session');
		 
		 //load database
		 $this->load->model('login_database');
		 }
		 
		 //loginform zien
		 public function user_login_form{
			 $this->load->view('login_form');
		 }
		 public function user_regestration_show(){
			 $this->load->view('validatie_form');
		 }
		 //signup validatie 
		 public function new_user_registratie(){
			 //check input
			 $this->form_validation->set_rules('name','Name','trim|required|xss_clean');
			 $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
			 $this-form_validation->set_rules('email_value','Email','trim|required|xss_clean');
			 $this-form_validation->set_rules('password','Password','trim|required|xss_clean');
			 if($this->form_validation->run() == FALSE){
				 $this->load->view('registration_form');
			 } else {
				 $data = array(
				 'name' => $this->input->post§('name');
				 'user_name' => $this->input->post('username');
				  'user_password'
				 )
			 }
			 
		 }
	}
?>