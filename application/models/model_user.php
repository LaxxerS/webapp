<?php

class Model_user extends CI_Model {
	public function validate() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

		if($query->num_rows() > 0) {
			$row = $query->row();
			$data = array(
					'user_id' => $row->user_id,
					'username' => $row->username,
					'password' => $row->password,
					'loggedIn' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		return false;
	}
	
	function create_user()
	{
		$username = $this->input->post('username');
		$sql_username_check = mysql_query("SELECT user_id FROM users WHERE username= '$username' LIMIT 1");
		$username_check = mysql_num_rows($sql_username_check);
		
		if ($username_check > 0 ){ 
			return false;
		}
		else 
		{
			$new_member_insert_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'gender' => $this->input->post('gender'),
				'email_address' => $this->input->post('email_address'),			
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),						
				'password2' => md5($this->input->post('password2')),						
				'accounttype' => $this->input->post('accounttype'),						
				'signupdate' => date("Y-m-d")					
			);
			

			$insert = $this->db->insert('users', $new_member_insert_data);
			return $insert;
		}
	}
}