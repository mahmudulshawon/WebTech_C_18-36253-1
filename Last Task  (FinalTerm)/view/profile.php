<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
	    header("Location: log.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<?php include "includes/header.php" ;?>

	<?php include "includes/menubar.php" ;?>

	<fieldset>
    	<legend>Profile Information</legend>
    	<h2>Full Name : </h2>
   		<span><h2>User Id : </h2><?php echo $_SESSION["username"];?></span>
	</fieldset>

	<fieldset>
	    

	</fieldset>

	



	<?php include "includes/footer.php" ;?>

</body>
</html>