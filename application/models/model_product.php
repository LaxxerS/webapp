<?php
class Model_product extends CI_Model {
	
	function get_all() {
		
		$results = $this->db->get('products')->result();
		
		return $results;
		
	}
	
	function get($product_id) {
		
		$results = $this->db->get_where('products', array('product_id' => $product_id))->result();
		$result = $results[0];
		
		return $results;
	}
	
	// function update($product_quantity, $product_id) {

		// $q =  $this->db->query("UPDATE products 
		// SET product_quantity=$product_quantity 
		// WHERE product_id = $product_id ");
		
		// return $q;
	// }
}
