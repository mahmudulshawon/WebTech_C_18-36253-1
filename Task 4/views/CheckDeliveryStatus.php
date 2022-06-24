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
	<title> Check Delivery Status</title>
</head>
<body>
	<?php include "includes/header.php" ;?>
	<p class="lead text-center" style="margin: 20px;"><a href="buyerHome.php">Back</a></p>
	
	<p style= "text-align:center;">Check Delivery Status</p>

	<table border="0" width="100%">
	<tr>
          <td width="5px"><img src="image/deliveryStatus.jpg" alt=""></td>
            <td width="5px"> </td>
            
        </tr>		

</table>
<?php include "includes/footer.php" ;?>
</body>
</html>