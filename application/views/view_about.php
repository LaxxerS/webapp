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
				<a href="<?php echo base_url(); ?>" class="logo">E-Commerce</a>
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
							if($account == 'admin') {
								echo '<li><a href="#">Welcome, ' . $username . ' &#8897</a>
									<ul>
										<a href="'. base_url() . 'admin"><li>Admin</li></a>
									    <a href="'. base_url() . 'home/logout"><li>Logout</li></a>
									</ul>
								  </li>';
							} else {
								echo '<li><a href="#">Welcome, ' . $username . ' &#8897</a>
									<ul>
									    <a href="'. base_url() . 'home/logout"><li>Logout</li></a>
									</ul>
								  </li>';								
							}
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
					<h1>About Us</h1>
					<p>You may find the details of the people behind this website here!</p>
					<br/><br/>
				</div>

			</div>
		</div>
	</div>

	<div class="wrapper max">
		<div class="inner-wrapper">
			<div class="tagline">
				<p>This website is developed for Web Application Assignment Development Part II. The details of group members are as follows: </p>
				<br><br>
				<p>CHONG ZHI RUI | 1112702246</p>
				<p>MADELINE TAN HUI TING | 1112700157</p>
				<p>HAU CHUNG ENN | 1112702110</p>
				<br><br><br>
			</div>
			<center><p><i>All Images Copyright <a href="http://collin-hughes.com/6q0mwfmoz5jflv2xgb11tbrcthr2y9" class="link">Collin Hughes</a></i></p></center>
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
