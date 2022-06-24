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
	<title> View Product Details </title>
</head>

<body>
  <?php include "includes/header.php" ;?>
   <p class="lead text-center" style="margin: 20px;"></p>
<table>

   <h2>Product Details </h2>
    <br><br>
  <tr>
    <th>Product_Name</th>
    <th></th> <th></th> <th></th> 
    <th>Product_Price</th>
    <th></th> <th></th> <th></th>
    <th>Product_Description</th>
  </tr>
</table>
<br><br>
<a href="buyerHome.php">Back</a>
<br><br>
<?php include "includes/footer.php" ;?>
</body>
</html>

