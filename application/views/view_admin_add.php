<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/normalize.css"; ?>>
        <link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/admin-ui.css"; ?>>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    </head>

    <nav class="sidebar-outer">
    	<ul>
    		<li><a href=<?php echo base_url(); ?>><i class="fa fa-home fa-2x"></i></a>
    		<li><a href=<?php echo base_url() . "admin"; ?>><i class="fa fa-line-chart fa-2x"></i></a>
    		<li><a href=<?php echo base_url() . "admin/view"; ?>><i class="fa fa-shopping-cart fa-2x active"></i></li></a>
    		<li><a href="#"><i class="fa fa-usd fa-2x"></i></li></a>
    		<li><a href=<?php echo base_url() . "home/logout"; ?>><i class="fa fa-sign-out fa-2x"></i></li></a>
    	</ul>
    </nav>

    <nav class="sidebar-inner">
    	<div class="descriptions">
			<span class="title">Products</span>
    		<p>Products allow you to adjust and showcase the items that are up for sales.</p>
    	</div>

    	<ul>
    		<a href=<?php echo base_url() . "admin/view"; ?>><li><i class="fa fa-database fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Product</li></a>
    		<a href=<?php echo base_url() . "admin/add"; ?>><li class="active-inner"><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Product</li></a>
    		<a href=<?php echo base_url() . "admin/view"; ?>><li><i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Update Product</li></a>
		</ul>
    </nav>
<div class="admin-contents">
	<span class="title">Add Product</span>
	<p>You may put up an item for sale by provding the follow details. Don't forget to provide a preview image.</p>

		<?php	
			echo '<div class="image-preview">';	
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
			
			echo "<img src='" . $display . "' class='img-thumbnail' id='blah' alt ='Product Picture' width='90%'/>";
			echo '<br>';
			echo form_input(array('name' => 'userfile', 'type' => 'file', 'id' => 'preview')); 
			echo '<br><br>';
			// picture 
			if(validation_errors() != false) {
				echo '<div class="error">' . validation_errors() . '</div>';
			}

			if($msg != NULL) {
				echo '<div class="error">' . $msg . '</div>';
			}
			echo '</div>';
			echo '<div class="product-details">';
			echo form_input(array('name' => 'product_name', 'value' => set_value('product_name'), 'placeholder' => 'Product Name', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required', 'autofocus' => 'autofocus'));
			echo '<br>';
			echo form_textarea(array('name' => 'product_description', 'value' => set_value('product_description'), 'rows' => '10','placeholder' => 'Product Description', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_input(array('name' => 'product_cost_price', 'value' => set_value('product_cost_price'), 'placeholder' => 'Cost Price | 2 decimals', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_input(array('name' => 'product_selling_price', 'value' => set_value('product_selling_price'), 'placeholder' => 'Selling Price | 2 decimals', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_input(array('name' => 'product_quantity', 'value' => set_value('product_quantity'), 'placeholder' => 'Quantity', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_submit(array('name' => 'submit', 'value' => 'Add'));
			echo form_close();
			echo '</div>';
		?>
	
</div>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#preview").change(function(){
        readURL(this);
    });
</script>

</html>

