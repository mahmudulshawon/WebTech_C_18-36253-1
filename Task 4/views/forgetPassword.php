<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <?php include "includes/header.php" ;?>
	<?php include "../controllers/UpdateAction.php" ;?>

	<br>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		<fieldset align="center">

			<legend>change password</legend>

			User Name *: <input type="text" id="username" name="username" value="<?php echo $username;?>">
			<span><?php echo $usernameEr;?></span>
			<br><br>
			Password *: <input type="password" id="password" name="password" value="<?php echo $password;?>">
			<span><?php echo $passwordEr;?></span>
			<br><br>

			Confirm Password *: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>">
			<span><?php echo $confirmpasswordEr;?></span>
			<br><br>
			
			<input type="submit" name="submit" value="Submit">
			<br><br>
			<a href="buyerLogin.php">Click to Log in </a>

		</fieldset>

	</form>
	<br>
    <?php include "includes/footer.php" ;?>
</body>
</html>