<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    public $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        //$this->user_model->check_role();
    }
    
    public function join()
    {
        // event register button
        if ($this->input->post('btn-reg')) 
        {
            $this->user_model->register();
            if ($this->user_model->error_count != 0) {
                $this->data['error']    = $this->user_model->error;
            } else {
                $this->session->set_userdata('tmp_success', 1);
                redirect('welcome_view');
            }
        }
        
        $tmp_success = $this->session->userdata('tmp_success');
        if ($tmp_success != NULL) {
            // new user created
            $this->session->unset_userdata('tmp_success');
            $this->data['tmp_success'] = 1;
        }
        
        // event login button
        if ($this->input->post('btn-login'))
        {
            $this->load->model('user_model');
            $this->user_model->check_login();
            if ($this->user_model->error_count != 0) {
                $this->data['error_login']    = $this->user_model->error;
            } else {
                redirect('welcome_view');
            }
        }
        
       // $this->data['title']   = 'User Join or Login :: '.CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('welcome_view');
        $this->load->view('footer');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('homepage');
    }
    
    public function index()
    {
		//$this->data['title']   = 'User Index :: '.CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('homepage');
        $this->load->view('footer');
    }
}
/*class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('user_model');
 }
 public function Homepage()
 {
  if(($this->session->userdata('email')!=""))
  {
   $this->welcome();
  }
  else{
   $data['title']= 'Home';
   $this->load->view('header',$data);
   $this->load->view('footer',$data);
  }
 }
 
 public function welcome()
 {
  $data['title']= 'Welcome';
  $this->load->view('header',$data);
  $this->load->view('test.php', $data);
  $this->load->view('footer',$data);
 }
 
 public function login()
 {
  $email=$this->input->post('email');
  $password=$this->input->post('pass');

  $result=$this->user_model->login($email,$password);
  if($result) $this->welcome();
  else        $this->Homepage();
 }
 public function thank()
 {
  $data['title']= 'Thank';
  $this->load->view('header',$data);
  $this->load->view('test.php', $data);
  $this->load->view('footer',$data);
 }
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('first_name', 'First_name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('last_name', 'Last_name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
  $this->form_validation->set_rules('country', 'LCountry', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[4]|xss_clean');

  if($this->form_validation->run() == FALSE)
  {
   $this->load->view('test',$data);
  }
  else
  {
   $this->user_model->add_user();
   $this->thank();
  }
 }
 public function logout()
 {
  $newdata = array(
  'user_id'   =>'',
  'user_name'  =>'',
  'user_email'     => '',
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  $this->index();
 }
}
*/
?>