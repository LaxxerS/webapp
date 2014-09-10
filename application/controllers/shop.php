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
		
		if($this->cart->contents() != null ) 
		{		
			foreach ($this->cart->contents() as $item){
				if($item['id'] == $this->input->post('product_id')) 
				{
					$rowid = $item['rowid'];
					$qty = $item['qty'] + $this->input->post('quantity');
					
						$update = array(
							'rowid' =>  $rowid,
							'qty' =>  $qty
						);
						
						$this->cart->update($update);
				}else
				{
					$insert = array(
						'id' => $this->input->post('product_id'),
						'qty' => $this->input->post('quantity'),
						'price' => $product->product_selling_price,
						'name' => $product->product_name
					);
					
					$this->cart->insert($insert);
				}
			}
			
		
		}
		else
		{
			$insert = array(
				'id' => $this->input->post('product_id'),
				'qty' => $this->input->post('quantity'),
				'price' => $product->product_selling_price,
				'name' => $product->product_name
			);
			
			$this->cart->insert($insert);
		}
		redirect('shop');
		
	}
	
	function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}

	function cart() {
		$this->load->view('view_cart');
	}
	
	function checkout() {
		$this->load->view('view_checkout');
	}
	
	function addCheckout() {
	
		$new_checkout_info = array(
			'first_name' =>  $this->input->post('first_name'),
			'last_name' =>  $this->input->post('last_name'),
			'email' =>  $this->input->post('email'),			
			'address' =>  $this->input->post('address'),			
			'country' =>  $this->input->post('country'),			
			'city' =>  $this->input->post('city'),			
			'state' =>  $this->input->post('state'),			
			'zip_postal' =>  $this->input->post('zip_postal'),			
			'phone' =>  $this->input->post('phone'),
			'shipping' =>  $this->input->post('shipping'),
			'prouduct_cost_total' =>  $this->input->post('prouduct_cost_total')
		);

		$insert = $this->db->insert('checkout_info', $new_checkout_info);
		return $insert;
	}
	
	
}
