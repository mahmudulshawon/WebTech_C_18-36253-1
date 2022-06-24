<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add To Cart</title>
</head>
<body>
	<?php include "includes/header.php" ;?>
	<p class="lead text-center" style="margin: 20px;">
	
	<p style= "text-align:center;">Add To Cart</p>

			

<h1>Make Payment</h1>
<br><br>

<a href="buyerHome.php">Back</a>
<br><br>
<?php include "includes/footer.php" ;?>

</body>
</html>