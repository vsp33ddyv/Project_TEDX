<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
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
      'user_name'  => $rows->username,
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
    'user_email'=>$this->input->post('email_address'),
    'user_pass'=>$this->input->post('password')
  );
  $this->db->insert('login',$data);
 }
}
?>