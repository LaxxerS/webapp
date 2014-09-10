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

<body>
    <div class="wrapper">
        <header class="navbar-cart">
            <?php 
                $total_items = $this->cart->total_items(); 
                $total_amount = $this->cart->total();
                if($total_items == 0) 
                    echo '<a href="'. base_url() . 'shop/cart" class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - 0 items | $0</a>';
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

    <div class="light">
    <div class="wrapper light">
        <div class="inner-wrapper light">
            <span class="title">Shopping Cart</span>
            <br><br><br>
                <div class="cart-list">
                <?php if ($cart = $this->cart->contents()){ ?>
                 <table style="width:100%;">
                    <tr style="width: 50%;">
                        <td style="width: 50%;"><small>Item</small></td>
                        <td><small>Quantity</small></td>
                        <td><small>Price</small></td>
                        <td><small>Action</small></td>
                    </tr>
                    <?php foreach ($cart as $item){ ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['qty'];?></td>
                        <td>$<?php echo $item['subtotal']; ?></td>
                        <td class="remove"><?php echo anchor('shop/remove/'.$item['rowid'],'x'); ?></td>
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

                    <?php }else {
                        echo '<center>Your cart is empty.' . '<a href='. base_url() . 'shop> Continue shopping.</a> </center>';
                        echo "<br><br>";
                    }?>
                </div>
        </div>
    </div>
    </div>
        <?php 
            if ($cart = $this->cart->contents()){ 
                echo "<br><br>";
                echo "<center>" . form_submit('action', 'CHECKOUT', "class='cart'") . "</center>"; 
            }
        ?>
</body>

</html>