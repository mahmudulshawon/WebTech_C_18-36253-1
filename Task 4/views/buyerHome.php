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
    <title>Buyers Home Page</title>

</head>
<body>
    <?php include "includes/header.php" ;?>

    
    <h1 style= "text-align:center; ">
    
    <p style= "text-align:center;">  <?php 
        
        echo "Welcome " .$_SESSION["username"];

    ?> </p>
    </h1>
                <a href="BuyProduct.php">Buy Product</a>
                <br>
                <a href="CheckDeliveryStatus.php">Check Delivery Status</a>
                <br>
                <a href="Reviews.php">Reviews</a>
                <br>
                <br>
                <a href="logout.php">Log out</a>
                <br><br>


            

                <?php include "includes/footer.php" ;?>



</body>
</html>
</body>
</html>