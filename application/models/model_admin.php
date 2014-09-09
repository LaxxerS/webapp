<?php

class Model_admin extends CI_Model {
	function add_product()
	{
		$new_product_insert = array(
			'product_name' => $this->input->post('product_name'),
			'product_description' => $this->input->post('product_description'),				
			'product_cost_price' => $this->input->post('product_cost_price'),				
			'product_selling_price' => $this->input->post('product_selling_price'),				
			'product_quantity' => $this->input->post('product_quantity')		
		);
		

		$insert = $this->db->insert('products', $new_product_insert);
		return $insert;
	}
}