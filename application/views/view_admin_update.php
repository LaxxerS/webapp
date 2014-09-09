 <?php 
$id_update = $this->uri->segment(3);

$sql = mysql_query("SELECT * FROM products WHERE product_id= $id_update");
$count = mysql_num_rows($sql);

if ($count > 1) {
	echo "There is no product with that id here.";
	exit();	
}
while($row = mysql_fetch_array($sql))
{
	$product_name = $row["product_name"];
	$product_description = $row["product_description"];
	$product_cost_price = $row["product_cost_price"];
	$product_selling_price = $row["product_selling_price"];
	$product_quantity = $row["product_quantity"];
}

?>
 
 <div >
	<h1>Update Product</h1>
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
			echo form_open_multipart("admin/updateProduct/$id_update", array('id' => 'edit', 'role' => 'form'));
			$display = base_url() . "public/product/" . $id_update . ".jpg";
			echo "<img src='" . $display . "'  alt ='Product Picture' width='100'/>";
			echo '<br>';
			echo form_input(array('name' => 'userfile', 'type' => 'file')); 
			echo '<br>';
			echo form_label('Product Name : ', 'product_name');
			echo form_input(array('name' => 'product_name', 'value' => $product_name, 'placeholder' => 'Product Name', 'required' => 'required', 'autofocus' => 'autofocus'));
			echo '<br>';
			echo form_label('Product Description : ', 'product_description');
			echo '<br>';
			echo form_textarea(array('name' => 'product_description', 'value' => $product_description, 'rows' => '5','placeholder' => 'Product Description', 'required' => 'required'));
			echo '<br>';
			echo form_label('Cost Price : ', 'product_cost_price');
			echo form_input(array('name' => 'product_cost_price', 'value' => $product_cost_price, 'placeholder' => '##.##', 'required' => 'required'));
			echo '<br>';
			echo form_label('Selling Price : ', 'product_selling_price');
			echo form_input(array('name' => 'product_selling_price', 'value' => $product_selling_price, 'placeholder' => '##.##', 'required' => 'required'));
			echo '<br>';
			echo form_label('Product Quantity : ', 'product_quantity');
			echo form_input(array('name' => 'product_quantity', 'value' => $product_quantity, 'placeholder' => 'Quantity', 'required' => 'required'));
			echo '<br>';
			echo form_submit(array('name' => 'submit', 'value' => 'Update'));
			echo form_close();

		?>
	</fieldset>
	
</div>