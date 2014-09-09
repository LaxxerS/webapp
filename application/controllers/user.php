<?php 

class User extends CI_Controller {
	
	public function _remap($method, $params = array())
	{
		$session = $this->session->userdata("loggedIn");
		$user_id = $this->session->userdata("user_id");
		$sql = mysql_query("SELECT accounttype FROM users WHERE user_id='$user_id'");
		$row = mysql_fetch_array($sql);
		$accounttype = $row["accounttype"];
		
		if($session && $accounttype == 'admin')
		{
			if (method_exists($this, $method))
			{
				call_user_func_array(array($this, $method), $params);
			}
			else
			{
				show_404();
			}
			
		}
		else if ($session && $accounttype == 'user')
		{
			echo redirect(base_url());
		}
		else
		{
			echo 'No direct Access <br>';
			echo anchor('home', 'Back');
		}
		
	}
	
	public function index() 
	{
		$this->load->view('view_admin_dashboard');
	}
	
	public function addProduct() 
	{
		$this->load->view('');
	}
	
	function updateProduct()
	{
		$this->load->view('');
	}
	
	function saleSummary()
	{
		$this->load->view('');
	}
	
}

?>