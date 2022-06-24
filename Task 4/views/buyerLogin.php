<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
     <?php include "includes/header.php" ;?>
	<?php include "../controllers/buyerloginAction.php" ;?>
	<br><br>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		<fieldset align="center">

			<legend>Buyer Log In information</legend>

			User Name *: <input type="text" id="username" name="username" value="<?php echo $username;?>">
			<span><?php echo $usernameEr;?></span>
			
			<br><br>
			Password *: <input type="password" id="password" name="password" value="<?php echo $password;?>">
			<span><?php echo $passwordEr;?></span>
			
			<br><br>

			<input type="submit" name="submit" value="log in">
			<br><br>

			<a href="forgetPassword.php">forget Password</a>
			<br>

			<a href="buyerRegistration.php">Click to Registration</a>
			

		</fieldset>
		<a href="login.php">Back</a>
        <br><br>

	</form>
        <?php include "includes/footer.php" ;?>
</body>
</html>