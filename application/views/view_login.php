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

<body class="dark">
	<a href= <?php echo base_url(); ?> class="back">&#60; BACK</span>
	<div class="login-box">
		<?php 
			if($msg != NULL) 
			{
				echo '<div class="error">' . $msg . '</div>';
			}
			echo form_open('/login', array('id' => 'login', 'role' => 'form'));
			echo form_input(array('name' => 'username', 'value' => set_value('username'), 'placeholder' => 'Username', 'class' => 'login', 'required' => 'required', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'autofocus' => 'autofocus'));
			echo form_password(array('name' => 'password', 'value' => set_value('password'), 'placeholder' => 'Password', 'class' => 'login', 'required' => 'required'));
			echo form_submit(array('name' => 'submit', 'class' => 'login', 'value' => 'Login'));
			echo form_close();
		?>
	</div>


</body>
</html>
