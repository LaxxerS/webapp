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
			<a href="#" class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - 0 items | $0</a>
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

		<div class="preview">
		</div>

		<div class="wrapper">
			<div class="inner-wrapper">
				<div class="tagline">
					<h1>TRUSTED QUALITY SURPLUS</h1>
					<p>Designed & Manufactured in Malaysia</p>
					<br/><br/>
					<a href="#">Find out more</a>
					<br/><br/>
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
								echo "<li>" . $product->product_description . "</li>"; 
							    echo "<li>$" . $product->product_selling_price . "</li>"; 
								echo "<li>" . form_label("Quantity ");
								$name_data = array(
									'name' => 'quantity',
									'id' => 'quantity',
									'type'=> 'number',
									'value' => set_value('quantity','0'),
									'min'=>'0',
									'max'=>'10'
								);	
								echo form_input($name_data)  . "</li>"; 		
								echo "</ul>";
								echo form_hidden('product_id', $product->product_id); 
								echo form_submit('action', 'Add to Cart'); 
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


			<ul>
			<?php 
			$count = 0;
			foreach ($products as $product)
			{
			?>
				<li>
					<?php echo form_open('shop/add'); ?>
					<div class="name"><?php echo $product->product_name; ?></div>
					
					<div class="thumb">
					<?php 
						$display = base_url() . "public/product/" . $product->product_id . ".jpg";
						echo "<img src='" . $display . "'  alt ='Product Picture' width='100'/>";
					?>			
					</div>
					
					<div class="price">Description : <?php echo $product->product_description; ?></div>
					
					<div class="price">Price : $<?php echo $product->product_selling_price; ?></div>
					
					<div class="quantities">
						
						<?php echo form_label("Quantity") ?>
						<?php
						$name_data = array(
							'name' => 'quantity',
							'id' => 'quantity',
							'type'=> 'number',
							'value' => set_value('quantity','0'),
							'min'=>'0',
							'max'=>'10'
						);	
						?>
						<?php echo form_input($name_data); ?>
					
					</div>
					
					<?php echo form_hidden('product_id', $product->product_id); ?>
					<?php echo form_submit('action', 'Add to Cart'); ?>
					<?php echo form_close(); 
					?>
				</li>
			<?php 
			} 
			?>
		</ul>
	</div>

	<?php if ($cart = $this->cart->contents()){ ?>
	<div id="cart">
		<table>
		<caption>Shopping Cart</caption>
		<thead>
			<tr>
				<th>Item Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<?php foreach ($cart as $item){ ?>
			<tr>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['qty'];?></td>
				<td>$<?php echo $item['subtotal']; ?></td>
				<td class="remove">	<?php echo anchor('shop/remove/'.$item['rowid'],'X'); ?></td>
			</tr>
		<?php } ?>
		<tr class="total">
			<td colspan="3"><strong>Total</strong></td>
			<td>$<?php echo $this->cart->total(); ?></td>
		</tr>
		</table>		
	</div>
	<?php } ?>
</body>
</html>