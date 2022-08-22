<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: view/login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
  <?php include "includes/header.php" ;?>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="AddProduct.php">Add Product</a>
   <a href="showAllProducts.php">Show All Products</a>
   <a href="ReportIssue.php">Report Issue</a>
            	
   <a href="SellProduct.php">Sell Product</a>
    <a href="logout.php">Logout</a>
    <?php include "includes/footer.php" ;?>
  </body>
</html>
