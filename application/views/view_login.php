<?php 
	echo form_open('/login/session', array('id' => 'login', 'role' => 'form'));
	if($msg != NULL) 
	{
		echo '<strong>' . $msg . '</strong>';
	}
	
	echo form_label('Username', 'username');
	echo form_input(array('name' => 'username', 'value' => set_value('username'), 'placeholder' => 'Username', 'required' => 'required', 'autofocus' => 'autofocus'));
	echo '<br>';
	echo form_label('Password', 'password');
	echo form_password(array('name' => 'password', 'value' => set_value('password'), 'placeholder' => 'Password', 'required' => 'required'));
	echo '<br>';
	echo form_submit(array('name' => 'submit', 'value' => 'Login'));
	echo '&nbsp or ';   
	echo anchor('/register', 'create an account');
	echo form_close();

?>