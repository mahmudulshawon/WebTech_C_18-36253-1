<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>
	<?php include "includes/header.php" ;?>
	<?php include "../controller/logAction.php";?>

	<br><br>
	<fieldset align="center">
		<a href="Login.php"><button>Seller</button></a> <br><br>
		<a href="buyerLogin.php"><button>Buyer</button></a> <br><br>
		<a href="employeeLogin.php"><button>Employee</button></a> <br><br>
		<a href="adminsignin.php"><button>Admin</button></a>
		

	</fieldset>
    <?php include "includes/footer.php" ;?>
	

</body>
</html>