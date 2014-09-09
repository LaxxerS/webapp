<?php

class Login extends CI_Controller {
	function _remap($method)
	{
		switch( $method )
		{
			case 'index':
				$this->index();
				break;
			default:
				show_404();;
				break;
		}
	}
	
	public function index($msg = NULL) {
		$data['msg'] = $msg;
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

		$this->load->view('view_login', $data);

		if(isset($_POST['username'])) {
			if($this->form_validation->run() == FALSE) {
				$msg = validation_errors();
				$this->index($msg);
			} else {
				$this->load->model('model_user');
				$query = $this->model_user->validate();
		
				if($query) {
					redirect(base_url() . user);
				} else {
					$_POST = array();
					$msg = "Invalid combination. <br>";
					$this->index($msg);

				}
			}			
		}
	}
<<<<<<< HEAD

=======
>>>>>>> 8338e8adc73df7dc64c55da33e6df617f2de92cb
}

?>