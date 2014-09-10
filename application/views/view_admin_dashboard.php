<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="public/assets/css/normalize.css">
        <link rel="stylesheet" href="public/assets/css/admin-ui.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    </head>

    <nav class="sidebar-outer">
    	<ul>
    		<li><a href="#"><i class="fa fa-home fa-2x"></i></a>
    		<li><a href="#"><i class="fa fa-line-chart fa-2x"></i></a>
    		<li><a href="#"><i class="fa fa-shopping-cart fa-2x"></i></li></a>
    		<li><a href="#"><i class="fa fa-usd fa-2x"></i></li></a>
    		<li><a href="#"><i class="fa fa-sign-out fa-2x"></i></li></a>
    	</ul>
    </nav>

    <nav class="sidebar-inner">
    	<h3>&nbsp;&nbsp;&nbsp;&nbsp;Settings</h3>
    	<p>&nbsp;&nbsp;&nbsp;&nbsp;Settings allows you to adjust the overall &nbsp;&nbsp;&nbsp;&nbsp;settings for your website.</p>
    	<ul>
    		<li><i class="fa fa-paw fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('admin', 'Add Products') ; ?></li>
			<li><i class="fa fa-paw fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/viewProduct', 'View Products');  ?></li>
    		<li><i class="fa fa-paw fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/saleSummary', 'Sale Summary');  ?></li>
    		<li><i class="fa fa-paw fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo anchor('home/logout', 'Logout');  ?></li>
		</ul>
    </nav>
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

</body>
</html>

