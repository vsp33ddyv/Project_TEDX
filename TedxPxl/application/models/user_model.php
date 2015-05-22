<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
	public $error       = array();
    public $error_count = 0;
	
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $this->db->where("user_email",$email);
  $this->db->where("user_pass",$password);

  $query=$this->db->get("login");
  if($query->num_rows()>0)
  {
   foreach($query->result() as $rows)
   {
    //add all data to session
    $newdata = array(
      'user_id'  => $rows->id,
      'first_name'  => $rows->first_name,
	  'last_name' => $rows->last_name,
	  'country' => $rows->country,
	  'phone' => $rows->phone,
      'user_email'    => $rows->email,
      'logged_in'  => TRUE,
    );
   }
   $this->session->set_userdata($newdata);
   return true;
  }
  return false;
 }
 public function add_user()
 {
  $data=array(
    'first_name'=>$this->input->post('first_name'),
	'last_name' => $this->input->post('last_name'),
	'country' => $this->input->post('country'),
	'city' => $this->input->post('city');
	'phone' => $this-input->post('phone');
    'user_email'=>$this->input->post('email_address'),
    'user_pass'=>$this->input->post('password')
  );
  $this->db->insert('login',$data);
 }
 public register(){
	 $row = $this->input->post('row');
        
        // email
        $is_exist_username = $this->db->get_where(login, 
                array('user_email' => $row['user_email']))->num_rows();
        if ($is_exist_username > 0) {
            $this->error['user_email'] = 'Email al in gebruik';
        }
        if (strlen($row['username']) < 5) {
            $this->error['username'] = 'Email minimum 5 characters';
        }
        
        // paswoord
        if ($row['user_pass'] != $this->input->post('password2')) {
            $this->error['password'] = 'Paswoord klopt niet';
        } else if (strlen($row['password']) < 5) {
            $this->error['password'] = 'Paswoord minimum 5 characters';
        }
        
        if (count($this->error) == 0) {
            $row['password'] = $this->$row['user_pass']);
            $this->db->insert(login, $row);
        } else {
            $this->error_count = count($this->error);
        }
	 
 }
 
}
?>