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
	<a href= <?php echo base_url(); ?> class="back">&#60; BACK</a>
	
	<div class="register-wrap">
		<?php 
			if(validation_errors() != false) {
				echo '<div class="error">' . validation_errors() . '</div>';
			}

			if($msg != NULL) {
				echo '<div class="error">' . $msg . '</div>';
			}
		?>

	<div class="register-personal">
		<h2>Personal Details</h2>
		<?php
			echo form_open('/register', array('id' => 'personal_info', 'role' => 'form'));
			echo form_input(array('name' => 'first_name', 'class'=> 'login', 'value' => set_value('first_name'), 'placeholder' => 'First Name', 'required' => 'required', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'autofocus' => 'autofocus'));
			echo '<br>';
			echo form_input(array('name' => 'last_name', 'class'=> 'login', 'value' => set_value('last_name'), 'placeholder' => 'Last Name', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			// echo form_label('Gender', 'gender');
			// echo form_radio(array('name' => 'gender', 'value' => 'male', 'checked' => 'checked'));
			// echo "Male";
			// echo form_radio(array('name' => 'gender', 'value' => 'female'));
			// echo "Female";
			// echo '<br>';
			echo form_input(array('name' => 'email_address', 'class'=> 'login', 'value' => set_value('email_address'), 'placeholder' => 'Email Address', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_input(array('name' => 'phone', 'class'=> 'login', 'value' => set_value('phone'), 'placeholder' => 'Phone No.', 'required' => 'required'));
			echo '<br>';
		?>
	</div>

	<div class="register-login">
		<h2>Login Credentials</h2>
		<?php
			echo form_open('/register', array('id' => 'login_info', 'role' => 'form'));
			echo form_input(array('name' => 'accounttype', 'type' => 'hidden', 'value' => 'user'));
			echo form_input(array('name' => 'username', 'class'=> 'login', 'value' => set_value('username'), 'placeholder' => 'Username', 'autocapitalize' => 'off', 'autocomplete'=> 'off', 'spellcheck'=> 'false', 'required' => 'required'));
			echo '<br>';
			echo form_password(array('name' => 'password', 'class'=> 'login', 'value' => set_value('password'), 'placeholder' => 'Password', 'required' => 'required'));
			echo '<br>';
			echo form_password(array('name' => 'password2', 'class'=> 'login', 'value' => set_value('password2'), 'placeholder' => 'Repeat Password', 'required' => 'required'));
			echo '<br>';
			echo form_submit(array('name' => 'submit', 'class'=> 'login', 'value' => 'Sign up'));
			echo form_close();
		?>
	</div>
	</div>
</body>
</html>

