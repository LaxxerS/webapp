<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Commerce | Home</title>
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
                    echo '<a href="'. base_url() . 'shop/cart"  class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - 0 items | $0</a>';
                else
                    echo '<a href="'. base_url() . 'shop/cart" class="cart pull-right"><i class="fa fa-shopping-cart"></i> Cart - ' . $total_items .' items | $'. $total_amount . '</a>';
            ?>
		</header>

		<nav class="navbar-head">
			<div class="inner-wrapper">
				<span class="logo">Site Logo</span>
				<ul class="pull-right">
					<a href="<?php echo base_url(); ?>"><li>Home</li></a>
					<a href="<?php echo base_url() . "shop"; ?>"><li>Shop</li></a>
					<a href="<?php echo base_url() . "about"; ?>"><li>About</li></a>
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
					<a href="<?php echo base_url() . "shop"; ?>">Find out more</a>
					<br/><br/>
				</div>

			</div>
		</div>

		<div class="card-background">
			<div class="wrapper max">
				<div class="inner-wrapper light">
				<center>	
					<a href=<?php echo base_url() . "shop"; ?> class="card">
						<h1>SHOP</h1>
					</a>
					<a href=<?php echo base_url() . "about"; ?> class="card">
						<h1>ABOUT</h1>
					</a>
					<a href=<?php echo base_url() . "register"; ?> class="card">
						<h1>REGISTER</h1>
					</a>
				</center>
				</div>
			</div>
		</div>


		<footer class="dark">
			<div class="foot-wrapper">
			<a href=""><img src=<?php echo base_url() . "public/assets/icons/fb.png"; ?> alt=""></a>
			<a href=""><img src=<?php echo base_url() . "public/assets/icons/tw.png"; ?> alt=""></a>
			<a href=""><img src=<?php echo base_url() . "public/assets/icons/g.png"; ?> alt=""></a>
			<a href=""><img src=<?php echo base_url() . "public/assets/icons/insta.png"; ?> alt=""></a>
			</div>
		</footer>
	


</body>
</html>
