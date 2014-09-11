<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Panel</title>
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
    		<li><a href=<?php echo base_url() . "home/logout"; ?>><i class="fa fa-sign-out fa-2x"></i></li></a>
    	</ul>
    </nav>

    <nav class="sidebar-inner">
    	<div class="descriptions">
			<span class="title">Products</span>
    		<p>Products allow you to adjust and showcase the items that are up for sales.</p>
    	</div>

    	<ul>
    		<a href=<?php echo base_url() . "admin/view"; ?>><li class="active-inner"><i class="fa fa-database fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Product</li></a>
    		<a href=<?php echo base_url() . "admin/add"; ?>><li><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Product</li></a>
    		<a href=<?php echo base_url() . "admin/view"; ?>><li><i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Update Product</li></a>
		</ul>
    </nav>
<div class="admin-contents">

	<span class="title">View Product</span>
	<p>Found 
		<?php 
			echo $product_no; 
			if($product_no == 0)
				echo " item.";
			else 
				echo " items.";
			echo " You are allowed to browse, update and delete the following items."
		?></p>

	<?php 
		if($product_no != 0) {
			foreach($records as $row) { 
				$display = base_url() . "public/product/" . $row->product_id . ".jpg";
				echo "
				<div class='product-list'>
					<div class='preview-img'>
					<img src='" . $display . "'  alt ='Product Picture' width='100%'/>
					</div>
				";
				echo "<div class='product-meta'>";
				echo "<h2>" . $row->product_name . "</h2>";
				echo "<p>$" . $row->product_selling_price . "</p>";
				echo "<br><br>";
				echo "<a href=" . base_url() . "admin/update/". $row->product_id .">Update</a>";
				echo "<a href=" . base_url() . "admin/delete/". $row->product_id .">Delete</a>";
				echo "<br><br><br>";
				echo "</div>";
				echo "</div>";
			}
		}
	?>

	
</div>

</body>
</html>

