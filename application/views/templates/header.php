<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SICD</title>
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
		// Mensaje 
		if (isset($message_display)) {
			echo "<div class='message'>";
			echo $message_display;
			echo "</div>";
		}
	?>
	<header>
		<!-- Se agrega el login -->
		<div id="logo">
			<img src="">	
		</div>