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
				 'user_password' => $this->input->post('username');
				 'user_email' => $this->input->post('email');
				 'user_password' => $this->input->post('password');
				 );
				 $result = $this->login_database->registration_insert($data);
				 if ($result == TRUE) {
					$data['message_display'] = 'Registration Successfully !';
					$this->load->view('login_form', $data);
				} else {
					$data['message_display'] = 'Username already exist!';
					$this->load->view('registration_form', $data);
			 }
			 
		 }
	}
	public function user_login_process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('login_form');
		} else {
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		$result = $this->login_database->login($data);
		if($result == TRUE){
		$sess_array = array(
		'username' => $this->input->post('username')
		);

		// Add user data in session
		$this->session->set_userdata('logged_in', $sess_array);
		$result = $this->login_database->read_user_information($sess_array);
		if($result != false){
		$data = array(
		'name' =>$result[0]->name,
		'username' =>$result[0]->user_name,
		'email' =>$result[0]->user_email,
		'password' =>$result[0]->user_password
		);
		$this->load->view('admin_page', $data);
		}
		}else{
		$data = array(
		'error_message' => 'Invalid Username or Password'
		);
		$this->load->view('login_form', $data);
		}
		}
		}

		// Logout from admin page
		public function logout() {

		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login_form', $data);
		}
		}

?>