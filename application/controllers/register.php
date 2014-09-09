<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	function _remap($method)
	{
		switch( $method )
		{
			case 'index':
				$this->index();
				break;
			case 'create_user':
				$this->create_user();
				break;
			default:
				show_404();;
				break;
		}
	}
	
	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('view_register', $data);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|name_space');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|phone');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]|strong_pass[3]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if(isset($_POST['username'])) {
			if($this->form_validation->run() == FALSE)
			{
				$data['msg'] = NULL;
				$this->load->view('view_register', $data);
			}
			else
			{			
				$this->load->model('model_user');
				
				if($query = $this->model_user->create_user())
				{
					redirect('/login');
				}
				else
				{
					$_POST = array();
					$msg = "Username already in use, please choose another.";
					$this->index($msg);
				}
			}
		}
		
	}

}