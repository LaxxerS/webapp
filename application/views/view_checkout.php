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
                <form action="#">
                <input type="text" placeholder="First Name" class="checkout"/>
                <input type="text" placeholder="Last Name" class="checkout"/>
                <input type="email" placeholder="Email" class="checkout"/>
                <input type="text" placeholder="Address" class="checkout"/>
                <input type="text" placeholder="Country" class="checkout"/>
                <input type="text" placeholder="City" class="checkout"/>
                <input type="text" placeholder="State" class="checkout"/>
                <input type="text" placeholder="Zip / Postal" class="checkout"/>
                <input type="text" placeholder="Phone Number" class="checkout"/>
                </form>                    
                </center>

            </div>

            <div class="checkout-summary">
                <h3>Order Summary</h3>
                <table style="width:100%">
                    <tr style="width: 50%;">
                        <td style="width: 50%;"><small>Item</small></td>
                        <td><small>Quantity</small></td>
                        <td><small>Price</small></td>
                    </tr>
                    <tr>
                        <td>Wool Akaskan Shirt</td>
                        <td>1</td>
                        <td>$99.99</td>
                    </tr>
                    <tr> <td colspan="3">&nbsp;</td> </tr>
                    <tr style="border-top: 1px solid #E0E0E0;"><td colspan="3">&nbsp;</td> </tr>
                    <tr>
                        <td></td>
                        <td><small>SUBTOTAL</small></td>
                        <td>$99.99</td>
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
                    <tr style="border-bottom: 1px solid #E0E0E0;"><td colspan="3">&nbsp;</td> </tr>
                    <tr><td colspan="3">&nbsp;</td> </tr>
                    <tr>
                        <td></td>
                        <td><h2>GRAND TOTAL:</h2></td>
                        <td><h2>$99.99</h2></td>
                    </tr>
                </table>
            </div>

            <div class="checkout-shipping">
                <h3>Shipping Method</h3>
                <p>Please select a shipping method before proceeding to payment.</p>
                <center>
                <select>
                    <option value="ship">Shipping Address same as Billing</option>
                    <option value="cod">Cash on Delivery</option>
                </select>       
                <br><br>
                <input type="submit" value="Checkout" class="checkout">
                </center>

            </div>
        </div>
        
    </div>
</body>

</html>