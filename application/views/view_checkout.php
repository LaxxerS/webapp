<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Commerce | Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/normalize.css"; ?>>
        <link rel="stylesheet" href=<?php echo base_url() . "public/assets/css/style.css"; ?>>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    </head>

<body class="light">
    <a href= <?php echo base_url() . "shop"; ?> class="back inverse">&#60; BACK</a>
    <div class="wrapper light">
        <div class="inner-wrapper light">
            <span class="title">Checkout</span>
            <br><br>
            <div class="checkout-billing">
                <h3>Billing Info</h3>
                <center>
				<?php 
					$userid = $this->session->userdata("user_id") ."<br>";
					
					$sql = mysql_query("SELECT * FROM users WHERE user_id='$userid'");
					
					if($sql === FALSE) {
						die(mysql_error()); 
					}
					
					while($row = mysql_fetch_array($sql))
					{
						$first_name = $row["first_name"];
						$last_name = $row["last_name"];
						$email = $row["email_address"];
						$phone = $row["phone"];
					}
				?>
				
                <form action="<?php echo base_url().'shop/addCheckout'; ?>" method="post">
                <input type="text" placeholder="First Name" name="first_name" class="checkout" value="<?php echo $first_name;?>"/>
                <input type="text" placeholder="Last Name" name="last_name" class="checkout" value="<?php echo $last_name;?>"/>
                <input type="email" placeholder="Email" name="email" class="checkout" value="<?php echo $email;?>"/>
                <input type="text" placeholder="Address" name="address" class="checkout" />
                <input type="text" placeholder="Country" name="country" class="checkout"/>
                <input type="text" placeholder="City" name="city" class="checkout"/>
                <input type="text" placeholder="State" name="state" class="checkout"/>
                <input type="text" placeholder="Zip / Postal" name="zip_post" class="checkout"/>
                <input type="text" placeholder="Phone Number" name="phone" class="checkout" value="<?php echo $phone;?>"/>
              
                </center>

            </div>

            <div class="checkout-summary">
                <h3>Order Summary</h3>
                <?php if ($cart = $this->cart->contents()){ ?>
				<table style="width:100%;">
					<tr style="width: 50%;">
						<td style="width: 50%;"><small>Item</small></td>
						<td><small>Quantity</small></td>
						<td><small>Price</small></td>
					</tr>
					<?php foreach ($cart as $item){ ?>
					<tr>
						<td><?php echo $item['name']; ?></td>
						<td><?php echo $item['qty'];?></td>
						<td>$<?php echo $item['subtotal']; ?></td>
						
						<?php 
							$product_id = $item['id'];
							
							$sql = mysql_query("SELECT * FROM products WHERE product_id='$product_id'");
							
							if($sql === FALSE) {
								die(mysql_error()); 
							}
							
							while($row = mysql_fetch_array($sql))
							{
								$product_cost_price = $row["product_cost_price"];
							}
							$real_cost = $item['qty'] * $product_cost_price;
							$prouduct_cost_total += $real_cost;
							// echo $prouduct_cost_total;
						?>
						
						<input type="hidden" name="prouduct_cost_total" class="checkout" value="<?php ?>"/>
					</tr>
					<?php } ?>
					<tr> <td colspan="4">&nbsp;</td> </tr>
					<tr style="border-top: 1px solid #E0E0E0;"><td colspan="4">&nbsp;</td> </tr>
					<tr>
						<td></td>
						<td><small>SUBTOTAL</small></td>
						<td>$<?php echo $this->cart->total(); ?></td>
					</tr>

					<tr>
						<td></td>
						<td><small>TAX</small></td>
						<td>$0.00</td>
					</tr>

					 <tr>
						<td></td>
						<td><small>SHIPPING</small></td>
						<td>$0.00</td>
					</tr>
					<tr style="border-bottom: 1px solid #E0E0E0;"><td colspan="4">&nbsp;</td> </tr>
					<tr><td colspan="4">&nbsp;</td> </tr>
					<tr>
						<td></td>
						<td><h2>GRAND TOTAL:</h2></td>
						<td><h2><td>$<?php echo $this->cart->total(); ?></td></h2></td>
					</tr>
				</table>

				<?php } ?>
            </div>

            <div class="checkout-shipping">
                <h3>Shipping Method</h3>
                <p>Please select a shipping method before proceeding to payment.</p>
                <center>
                <select name="shipping">
                    <option value="ship">Shipping Address same as Billing</option>
                    <option value="cod">Cash on Delivery</option>
                </select>       
                <br><br>
					<input type="submit" value="Checkout" class="checkout"></form> 
                </center>

            </div>
        </div>
        
    </div>
</body>

</html>