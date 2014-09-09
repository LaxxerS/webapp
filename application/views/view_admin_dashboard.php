<div >
	<h1>Add Product</h1>
		<?php 
			if(validation_errors() != false) {
				echo "<strong>" . validation_errors() . "</strong>";
			}

			if($msg != NULL) {
				echo "<strong>" . $msg . "</strong>";
			}
		?>

	<fieldset>
	<legend>Product Details</legend>
		<?php		
			echo form_open_multipart('admin/addProduct', array('id' => 'product_details', 'role' => 'form'));
			// picture
			$next = $this->db->query("SHOW TABLE STATUS LIKE 'products'");
			$next = $next->row(0);
			$product_id = $next->Auto_increment;
			$path = base_url() . "public/product/" . $product_id . ".jpg";
			
			if(!file_exists($path)) {
				$display = base_url() . "public/product/default.jpg";
			} else {
				$display = $path;
			}
			
			echo "<img src='" . $display . "' class='img-thumbnail' alt ='Product Picture' width='100'/>";
			echo '<br>';
			echo form_input(array('name' => 'userfile', 'type' => 'file')); 
			echo '<br>';
			// picture
			echo form_label('Product Name : ', 'product_name');
			echo form_input(array('name' => 'product_name', 'value' => set_value('product_name'), 'placeholder' => 'Product Name', 'required' => 'required', 'autofocus' => 'autofocus'));
			echo '<br>';
			echo form_label('Product Description : ', 'product_description');
			echo '<br>';
			echo form_textarea(array('name' => 'product_description', 'value' => set_value('product_description'), 'rows' => '5','placeholder' => 'Product Description', 'required' => 'required'));
			echo '<br>';
			echo form_label('Cost Price : ', 'product_cost_price');
			echo form_input(array('name' => 'product_cost_price', 'value' => set_value('product_cost_price'), 'placeholder' => '##.##', 'required' => 'required'));
			echo '<br>';
			echo form_label('Selling Price : ', 'product_selling_price');
			echo form_input(array('name' => 'product_selling_price', 'value' => set_value('product_selling_price'), 'placeholder' => '##.##', 'required' => 'required'));
			echo '<br>';
			echo form_label('Product Quantity : ', 'product_quantity');
			echo form_input(array('name' => 'product_quantity', 'value' => set_value('product_quantity'), 'placeholder' => 'Quantity', 'required' => 'required'));
			echo '<br>';
			echo form_submit(array('name' => 'submit', 'value' => 'Add'));
			echo form_close();

		?>
	</fieldset>
	
</div>




<?php


echo anchor('home/logout', 'Logout');

?>