<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Buyer Registration</title>
</head>
<body>
	<?php include "includes/header.php" ;?>
	<br><br>
	<?php include "../controllers/buyerRegistrationAction.php";?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<fieldset align="center">

			<legend>Sign Up information</legend>

			Full Name *: <input type="text" name="fullname" value="<?php echo $fullname;?>">
			<label><?php echo $fullnameEr;?></label>
			<br><br>

			User Name *: <input type="text" name="username" value="<?php echo $username;?>">
			<label><?php echo $usernameEr;?></label>
			
			<br><br>
			Phone Number *: <input type="text" name="pnumber" value="<?php echo $pnumber;?>">
			<label><?php echo $pnumberEr;?></label>

			<br><br>
			Gmail *: <input type="text" name="gmail" value="<?php echo $gmail;?>">
			<label><?php echo $gmailEr;?></label>

			<br><br>
			Password *: <input type="password" name="password" value="<?php echo $password;?>">
			<span><?php echo $passwordEr;?></span>
			
			<br><br>
			Confirm Password *: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>">
			<span><?php echo $confirmpasswordEr;?></span>

			<br><br>
			<input type="submit" name="submit" value="sign up">
			<br><br>

			<span>Already have an account ? <a href="buyerLogin.php">log in</a></span>

		</fieldset>
		<a href="login.php">Back</a>
        <br><br>

	</form>

	<span><?php echo $successMesg;?></span>
	<span><?php echo $errorMesg;?></span>
     <?php include "includes/footer.php" ;?>
</body>
</html>