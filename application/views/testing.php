<div >
	<h1>Update Product</h1>
		<?php 
			// if(validation_errors() != false) {
				// echo "<strong>" . validation_errors() . "</strong>";
			// }

			// if($msg != NULL) {
				// echo "<strong>" . $msg . "</strong>";
			// }
		?>

	<fieldset>
	<legend>Product Details</legend>
		<?php		
			echo form_open('/', array('id' => 'product_details', 'role' => 'form'));
			echo form_label('Product Image : ', 'product_image');
			echo '<br>';
			echo form_label('Product Name : ', 'product_name');
			echo form_input(array('name' => 'product_name', 'value' => set_value('product_name'), 'placeholder' => 'Product Name', 'required' => 'required', 'autofocus' => 'autofocus'));
			echo '<br>';
			echo form_label('Product Description : ', 'product_description');
			echo '<br>';
			echo form_textarea(array('name' => 'product_description', 'value' => set_value('product_description'), 'rows' => '5','placeholder' => 'Product Description', 'required' => 'required'));
			echo '<br>';
			echo form_label('Cost Price : ', 'product_cost_price');
			echo form_input(array('name' => 'product_cost_price', 'value' => set_value('cost_price'), 'placeholder' => 'RM XXX', 'required' => 'required'));
			echo '<br>';
			echo form_label('Selling Price : ', 'product_selling_price');
			echo form_input(array('name' => 'product_selling_price', 'value' => set_value('product_selling_price'), 'placeholder' => 'RM XXX', 'required' => 'required'));
			echo '<br>';
			echo form_label('Product Quantity : ', 'product_quantity');
			echo form_input(array('name' => 'product_quantity', 'value' => set_value('product_product_quantity'), 'placeholder' => 'Quantity', 'required' => 'required'));
			echo '<br>';
			echo form_submit(array('name' => 'submit', 'value' => 'Add'));
			echo form_close();

		?>
	</fieldset>
	
</div>

<div >
	<h1>Sale Summary</h1>
	<fieldset>
		<?php
			echo 'total sale <br>';
			echo 'nett profit <br>';
		?>	
	</fieldset>
</div>