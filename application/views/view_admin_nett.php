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
    		<li><a href=<?php echo base_url() . "admin"; ?>><i class="fa fa-line-chart fa-2x active"></i></a>
    		<li><a href=<?php echo base_url() . "admin/view"; ?>><i class="fa fa-shopping-cart fa-2x"></i></li></a>
    		<li><a href=<?php echo base_url() . "home/logout"; ?>><i class="fa fa-sign-out fa-2x"></i></li></a>
    	</ul>
    </nav>

    <nav class="sidebar-inner">
    	<div class="descriptions">
			<span class="title">Sales Summary</span>
    		<p>Sales summary gives you an insight of sales and provides you with detailed information.</p>
    	</div>

    	<ul>
    		<a href=<?php echo base_url() . "admin"; ?>><li><i class="fa  fa-star fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Total Sales</li></a>
    		
			
			<a href=<?php echo base_url() . "admin/nett"; ?>><li class="active-inner"><i class="fa fa-money fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nett Profit</li></a>   		
			
		</ul>
    </nav>
<div class="admin-contents">
    <span class="title">Nett Profit</span>
    <p>This section allows you to have an insight on the total nett profit.</p>
    <br><br>

     <table style="width:100%;">
        <tr style="width: 50%;">
            <td style="width: 50%;"><small>Checkout ID</small></td>
            <td><small>Cost Price</small></td>
            <td><small>Selling Price</small></td>
        </tr>
        <?php $nett_profit = 0; ?>
    <?php foreach ($records as $row){ ?>
            <tr>
                <td><?php echo $row->checkout_id; ?></td>
                <td>$<?php echo $row->prouduct_cost_total; ?></td>
                <td>$<?php echo $row->total_selling_price; ?></td>
            </tr>
            <?php $nett_profit = $row->total_selling_price - $row->prouduct_cost_total; ?>
    <?php } ?>
    <tr> <td colspan="3">&nbsp;</td> </tr>

            </tr>
            <tr style="border-bottom: 1px solid #E0E0E0;"><td colspan="4">&nbsp;</td> </tr>
            <tr><td colspan="3">&nbsp;</td> </tr>
            <tr>
                <td></td>
                <td><h2>NETT PROFIT:</h2></td>
                <td><h2>$<?php echo $nett_profit; ?></h2></td>
            </tr>
            </table>
</div>

</body>
</html>

