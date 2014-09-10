<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Shop</title>
	<meta charset="UTF-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/normalize.css"; ?>>
    <link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/style.css"; ?>>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
	<div class="wrapper">
		<header class="navbar-cart">
			<?php 
				$total_items = $this->cart->total_items(); 
				$total_amount = $this->cart->total();
				if($total_items == 0) 
					echo '<a href="'. base_url() . 'shop/cart" " class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - 0 items | $0</a>';
				else
					echo '<a href="'. base_url() . 'shop/cart"  class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - ' . $total_items .' items | $'. $total_amount . '</a>';
			?>
		</header>

		<nav class="navbar-head">
			<div class="inner-wrapper">
				<span class="logo">Site Logo</span>
				<ul class="pull-right">
					<a href="<?php echo base_url(); ?>"><li>Home</li></a>
					<a href="<?php echo base_url() . "shop"; ?>"><li>Shop</li></a>
					<a href="#"><li>About</li></a>
					<?php 
						$session = $this->session->userdata("loggedIn");
						$username = $this->session->userdata("username");
						if(empty($session)) {
							echo '
								<li>Account &#8897;
									    <ul>
									      <a href="' . base_url() . 'login"><li>Sign in</li></a>
									      <a href="' . base_url() . 'register"><li>Register &raquo;</li></a>					  
									    </ul>
								</li>
								';							
						} else {
							echo '<li><a href="#">Welcome, ' . $username . ' &#8897</a>
									<ul>
									  <a href="'. base_url() . 'home/logout"><li>Logout</li></a>
									</ul>
								  </li>';
						}
					?>
				</ul>
			</div>
		</nav>
	</div>	

	<div class="dark">
		<div class="wrapper dark">
			<div class="inner-wrapper dark">
				<div class="tagline light-font">
					<h1>SHOP</h1>
					<p>Only handcrafted & carefully-selected items are up for sales.</p>
					<p>The level of quality will amaze you.</p>
					<br/><br/>
				</div>

			</div>
		</div>
	</div>
		<div class="card-background">
			<div class="wrapper max">
				<div class="inner-wrapper light">
				<?php 
					$count = 0;
					foreach ($products as $product)
					{
				?>					
					<div class="product-list">
						<?php echo form_open('shop/add'); ?>
						<div class="preview-img ">
						<?php 
							$display = base_url() . "public/product/" . $product->product_id . ".jpg";
							echo "<img src='" . $display . "'  alt ='Product Picture' width='100%'/>";
						?>								
						</div>

						<div class="product-meta">
							<?php 
								echo "<ul>";
								echo "<center><h3>" . $product->product_name . "</h3></center><hr>"; 
								echo "<li><i>" . $product->product_description . "</i></li><br>"; 
							    echo "<li><h3>$" . $product->product_selling_price . "</h3></li>"; 
							    echo "<br>";
								echo "<li><small>&nbsp;&nbsp;" . form_label("Quantity ") . "</small>";
								$name_data = array(
									'name' => 'quantity',
									'id' => 'quantity',
									'type'=> 'number',
									'class' => 'cart',
									'value' => set_value('quantity','0'),
									'min'=>'0',
									'max'=>'10'
								);	
								echo form_input($name_data)  . "</li>"; 		
								echo "</ul>";
								echo form_hidden('product_id', $product->product_id); 
								echo "<center>" . form_submit('action', 'Add to Cart', "class='cart'") . "</center>"; 
								echo form_close(); 	

							?>
									    
						</div>
					</div>
				<?php 
					} 
				?>					
				</div>
			</div>
		</div>
		
		<footer class="dark">
			<div class="foot-wrapper">
			<a href=""><img src="public/assets/icons/fb.png" alt=""></a>
			<a href=""><img src="public/assets/icons/tw.png" alt=""></a>
			<a href=""><img src="public/assets/icons/g.png" alt=""></a>
			<a href=""><img src="public/assets/icons/insta.png" alt=""></a>
			</div>
		</footer>
	
</body>
</html>