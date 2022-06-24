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
	<title> Buy Product </title>
</head>
<body>
	<?php include "includes/header.php" ;?>
	<p class="lead text-center" style="margin: 20px;"></p>
	<h1>Buy Product</h1>
	
    <br><br>

</form>

<table>
  <tr>
  	<th>250.00 TK</th>
    <th>250.00 TK</th>
    <th></th>
    
     <tr>
            <td align="left"; width="500px"><img src="image/buy.jpg" alt=""></td>
             <td align="left"; width="500px"><img src="image/buy2.jpg" alt=""></td>
       </tr>
  </tr>


 

</table>
<br><br>
<a href="ViewProductDetails.php">View Product Details</a>
<br> <br>
<a href="AddToCart.php">Add To Cart</a>
<br>
<br>
<a href="buyerHome.php">Back</a>
<br><br>
<?php include "includes/footer.php" ;?>
</body>
</html>