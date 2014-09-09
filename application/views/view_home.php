<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="public/assets/css/normalize.css">
        <link rel="stylesheet" href="public/assets/css/style.css">
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
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
					<?php 
						$session = $this->session->userdata("loggedIn");
						$username = $this->session->userdata("username");
						if(empty($session)) {
							echo '
								<li>Account &#8897;
									    <ul>
									      <li><a href="' . base_url() . 'login">Sign in</a></li>
									      <li><a href="' . base_url() . 'register">Register &raquo;</a></li>
									    </ul>
								</li>
								';							
						} else {
							echo '<li><a href="#">Welcome, ' . $username . '</a></li>';
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
				<center>	
					<a href=<?php echo base_url() . "#"; ?> class="card">
						<h1>SHOP</h1>
					</a>
					<a href=<?php echo base_url() . "#"; ?> class="card">
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
			<a href=""><img src="public/assets/icons/fb.png" alt=""></a>
			<a href=""><img src="public/assets/icons/tw.png" alt=""></a>
			<a href=""><img src="public/assets/icons/g.png" alt=""></a>
			<a href=""><img src="public/assets/icons/insta.png" alt=""></a>
			</div>
		</footer>
	


</body>
</html>
