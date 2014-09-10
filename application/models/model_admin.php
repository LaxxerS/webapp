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
	
	function update_product() 
	{
		$id_update = $this->uri->segment(3);
		
		$product_name = $this->input->post('product_name');
		$product_description = $this->input->post('product_description');			
		$product_cost_price = $this->input->post('product_cost_price');			
		$product_selling_price = $this->input->post('product_selling_price');				
		$product_quantity = $this->input->post('product_quantity');
		
		$sql_update =  $this->db->query("UPDATE products 
										SET product_name = '$product_name',
										product_description = '$product_description',
										product_cost_price = '$product_cost_price',
										product_selling_price = '$product_selling_price',
										product_quantity = '$product_quantity'
										WHERE product_id = $id_update ");
		return $sql_update;
	}
	
	function getALL()
	{
		$query = $this->db->get('products');
		return $query->result();
	}
	
	function delete_product()
	{
		$this->db->where('product_id', $this->uri->segment(3));
		$this->db->delete('products');
		redirect('admin/view');
	}
	
	function count_product()
	{
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('products');
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		
		return $ret;
	}
}