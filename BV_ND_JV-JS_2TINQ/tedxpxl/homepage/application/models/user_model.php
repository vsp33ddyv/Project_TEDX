<?php

class User_model extends CI_Model {
    public $error       = array();
    public $error_count = 0;
    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function check_role()
    {
        $user_id = $this->session->userdata('cibb_user_id');
        // get roles
        if ($user_id) {
            $row = $this->db->get_where(login, array('id' => $user_id))->row();
            $roles = $this->db->get_where(TBL_ROLES, array('id' => $row->role_id))->row_array();
        }
    }
    
    public function check_login()
    {
        $row = $this->input->post('row');
        
        $data = array('user_email' => $row['user_email']);

        $query = $this->db->get_where(login, $data);
        
        $plain_password = '';

        if ( ($query->num_rows() == 1) ) {
            $user = $query->row();
            $plain_password = $this->encrypt->decode($user->password, $key);
        }
        
        // if user found
        if ( ($query->num_rows() == 1) && ($plain_password == $row['password'])) {
            $row = $query->row();
            $this->session->set_userdata('ogged_in', 1);
            $this->session->set_userdata('user_id'  , $row->id);
            $this->session->set_userdata('user_email' , $row->username);
			//$this->session->set_userdata('cibb_user_roleid' , $row->role_id);
            /*
            // get roles
            $roles = $this->db->get_where(TBL_ROLES, array('id' => $row->role_id))->row_array();
            foreach ($roles as $key => $value) {
                $this->session->set_userdata($key, $value);
            }*/
        } else {
            $this->error['login'] = 'Gelieve te registreren';
            $this->error_count = 1;
        }
    }
    
    public function register()
    {
        $row = $this->input->post('row');
        
        // check user-email
        $is_exist_user_email = $this->db->get_where(login, 
                array('user_email' => $row['user_email']))->num_rows();
        if ($is_exist_username > 0) {
            $this->error['email'] = 'Email bestaan al';
        }
        if (strlen($row['user_email']) < 5) {
            $this->error['email'] = 'email minimum 5 character';
        }
        
        // check password
        if ($row['user_pass'] != $this->input->post('password2')) {
            $this->error['password'] = 'Paswoord komt niet overeen';
        } else if (strlen($row['user_pass']) < 5) {
            $this->error['password'] = 'Paswoord minimum 5 characters';
        }
        
        if (count($this->error) == 0) {
            $key = $this->config->item('encryption_key');
            $row['password'] = $this->encrypt->encode($row['password'], $key);
            $this->db->insert(login, $row);
        } else {
            $this->error_count = count($this->error);
        }
    }
}