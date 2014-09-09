<?php 

class Admin extends CI_Controller {
	
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
	
	public function index($msg = NULL) 
	{
		$data['msg'] = $msg;
		$this->load->view('view_admin_dashboard',$data);
	}
	
	function error_pic($msg = NULL) {
		$data['msg'] = $msg;
		$this->load->view('view_admin_dashboard', $data);
	}
	
	public function addProduct() 
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('product_name', 'Name', 'trim|required|alpha');
		$this->form_validation->set_rules('product_description', 'Description', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('product_cost_price', 'Cost Price', 'trim|required|decimal');
		$this->form_validation->set_rules('product_selling_price', 'Selling Price', 'trim|required|decimal');
		$this->form_validation->set_rules('product_quantity', 'Quantity', 'trim|required|numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['msg'] = NULL;
			$this->load->view('view_admin_dashboard',$data);
		}
		else
		{			
			$this->load->model('model_admin');			
			$next = $this->db->query("SHOW TABLE STATUS LIKE 'products'");
			$next = $next->row(0);
			$product_id = $next->Auto_increment;
			$pathToUpload = './public/product/';
			$config['file_name'] = $product_id . '.jpg';
			$config['upload_path'] = $pathToUpload;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '5000';
			$config['overwrite'] = True;
			$this->load->library('upload', $config);
	
			if($this->upload->do_upload())
			{
				$this->model_admin->add_product();
				$data = array('upload_data' => $this->upload->data());
				echo "Succesfully Added A Product";
			}
			else
			{
				$this->error_pic($this->upload->display_errors());
			}			
		}
		
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