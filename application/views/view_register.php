<div >
	<h1>Create an Account</h1>
		<?php 
			if(validation_errors() != false) {
				echo "<strong>" . validation_errors() . "</strong>";
			}

			if($msg != NULL) {
				echo "<strong>" . $msg . "</strong>";
			}
		?>

	<fieldset>
	<legend>Personal Information</legend>
		<?php
		echo form_open('/register/create_user', array('id' => 'personal_info', 'class' => 'form-signin', 'role' => 'form'));
		echo form_label('First Name', 'first_name');
		echo form_input(array('name' => 'first_name', 'class' => 'form-control', 'value' => set_value('first_name'), 'placeholder' => 'First Name', 'required' => 'required', 'autofocus' => 'autofocus'));
		echo '<br>';
		echo form_label('Last Name', 'last_name');
		echo form_input(array('name' => 'last_name', 'class' => 'form-control', 'value' => set_value('last_name'), 'placeholder' => 'Last Name', 'required' => 'required'));
		echo '<br>';
		echo form_label('Gender', 'gender');
		echo "<label class='radio-inline'>";
		echo form_radio(array('name' => 'gender', 'value' => 'male', 'checked' => 'checked'));
		echo "Male";
		echo "</label>";
		echo "<label class='radio-inline'>";
		echo form_radio(array('name' => 'gender', 'value' => 'female'));
		echo "Female";
		echo "</label>";
		echo '<br>';
		echo form_label('Email Address', 'email_address');
		echo form_input(array('name' => 'email_address', 'class' => 'form-control', 'value' => set_value('email_address'), 'placeholder' => 'abc@abc.com', 'required' => 'required'));
		echo '<br>';
		?>
	</fieldset>

	<fieldset>
		<legend>Login Info</legend>
		<?php
		echo form_open('/register/create_user', array('id' => 'login_info', 'class' => 'form-signin', 'role' => 'form'));
		echo form_input(array('name' => 'accounttype', 'type' => 'hidden', 'value' => 'user'));
		echo form_label('Username', 'username');
		echo form_input(array('name' => 'username', 'class' => 'form-control', 'value' => set_value('username'), 'placeholder' => 'aaaa', 'required' => 'required'));
		echo '<br>';
		echo form_label('Password', 'password');
		echo form_password(array('name' => 'password', 'class' => 'form-control', 'value' => set_value('password'), 'placeholder' => '1!aA', 'required' => 'required'));
		echo '<br>';
		echo form_label(' Password Confirmation', 'password2');
		echo form_password(array('name' => 'password2', 'class' => 'form-control', 'value' => set_value('password2'), 'placeholder' => '1!aA', 'required' => 'required'));
		echo '<br>';
		echo form_submit(array('name' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Sign up'));
		?>
	</fieldset>
</div>
