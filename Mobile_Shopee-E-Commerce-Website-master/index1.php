<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	<link rel="stylesheet" a href="sty.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
	<div class="container">
		<h1 style="text-align: center ;padding-top: 5px; color: white;"> Welcome to Mobistore</h1>
		<form action="login.php" method="post">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name" required="" />	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>