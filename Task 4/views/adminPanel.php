<?php
	session_start();
	if(!isset($_SESSION["username"]))
	{
	    header("Location: signin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<?php include "includes/header.php" ;?>

	

	
	<?php 
		
		echo "Welcome " .$_SESSION["username"].",";
		

	?>
	<a href="signin.php">Sign Out</a>

		<hr>
	<form align="center">

		<h3>Admin Dashboard</h3>
		<hr>
		<a href="adminProfile.php">Admin Profile</a> <br><br>
		<a href="employeeInfo.php">Employee</a> <br><br>
		<a href="sellerInfo.php">Seller</a> <br><br>
		<a href="customerInfo.php">Customer</a>
	</form>
	
		
		
<br>
<br>
<br>
		<?php include "includes/footer.php" ;?>
	

	

	



	



</body>
</html>