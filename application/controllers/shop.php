<?php
class Shop extends CI_Controller {
	
	function index() {
		
		$this->load->model('model_product');
		
		$data['products'] = $this->model_product->get_all();
		
		$this->load->view('view_shop', $data);
	}
	
	function add() {
		$this->load->model('model_product');
		
		$product = $this->model_product->get($this->input->post('product_id'));
		
		$insert = array(
			'id' => $this->input->post('product_id'),
			'qty' => $this->input->post('quantity'),
			'price' => $product->product_selling_price,
			'name' => $product->product_name
		);
		
		$this->cart->insert($insert);
		
		redirect('shop');
		
	}
	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}
	
}
