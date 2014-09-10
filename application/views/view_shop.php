<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Shop</title>
	<meta charset="UTF-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
	
	<style type="text/css">
		body {
			font: 13px Arial;
		}
		br{
			line-height :0.65cm;
		}
		#products {
			text-align: center;
		}
		#products ul {
			list-style-type: none; margin: 0px;
		}
		#products li {
			width: 150px; padding: 4px; margin: 8px;
			border: 1px solid #ddd; background-color: #eee;
			-moz-border-radius: 4px; -webkit-border-radius: 4px;
			float: left;
		}
		#products .name {
			font-size: 15px; margin: 5px;
		}
		#products .price {
			margin: 5px;
		}
		#products .option {
			margin: 5px;
		}
		
		#cart {
			padding: 4px; margin: 8px; float: left;
			border: 1px solid #ddd; background-color: #eee;
			-moz-border-radius: 4px; -webkit-border-radius: 4px;
		}
		#cart table {
			width: 320px; border-collapse: collapse;
			text-align: left;
		}
		#cart th {
			border-bottom: 1px solid #aaa;			
		}
		#cart caption {
			font-size: 15px; height: 30px; text-align: left;
		}
		#cart .total {
			height: 40px;
		}
		#cart .remove a {
			color: red;
		} 
	</style>
</head>
<body>
	<div id="products">
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