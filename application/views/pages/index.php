<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// Mensaje de Logout

		if (isset($logout_message)) 
		{
			echo "<div class='message'>";
			echo $logout_message;
			echo "</div>";
		}
	?>
	<?php
		// Mensaje de ...
		if (isset($message_display)) {
			echo "<div class='message'>";
			echo $message_display;
			echo "</div>";
		}
	?>

	<div id="main">
		<div id="login">
			<h2>Login Form</h2>
			<hr/>
			<?php echo form_open('login/login'); ?>
			<?php
				// Mensaje de error en caso de fallar el login
				echo "<div class='error_msg'>";
				if (isset($error_message)) 
				{
					echo $error_message;
				}
				echo validation_errors();
				echo "</div>";
			?>

			<label>Email :</label>
			<input type="text" name="email" id="email" placeholder="email"/><br /><br />
			<label>Password :</label>
			<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
			<input type="submit" value=" Login " name="submit"/><br />
			<!--
			<a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>
			-->
			<?php echo form_close(); ?>
	</div>
	</div>
</body>
</html>