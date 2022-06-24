<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <?php include "includes/header.php" ;?>

	<br><br>

	<form align="center"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		

		<fieldset>

			<legend><b>Sign In</b></legend>

			Username : <input type="text" id="username" name="username"">
			
			<br><br>
			Password : <input type="password" id="password" name="password"">
			
			<br><br>

			<input type="submit" name="submit" value="Sign In">
			<br><br>

			
			<a href="empRegistration.php"> Create New Admin</a><br><br>
			
			<a href="signin.php">Go Back</a>
			
			

		

	</form>
	</fieldset>

	<br>
	<br>
	<br>

	

	<?php include "includes/footer.php" ;?>

	
</body>
</html>