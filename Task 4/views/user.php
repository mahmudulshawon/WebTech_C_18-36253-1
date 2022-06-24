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
    <title> View Users</title>
</head>
<body>

    <?php include "includes/header.php" ;?>

    <?php include "includes/menubar.php" ;?>

    <?php
        echo "Welcome " .$_SESSION["username"];
    ?>

    <fieldset>
        
       

            <legend>View User Details</legend>
            <label for="username">User Name :</label>
            <input type="text" id="username" name="username">

            <br> <br>
            <input type="submit" name="submit" value="Show"> <br> <br>

       

    </fieldset>

   
         
    <table border="1">
        <h1>Seller</h1>
        <thead>
            <tr>
                <td>Full name</td>
                <td>User name</td>
                <td>password</td>
            </tr>
            

        </thead>
        <tbody>
            <?php
                $data = file_get_contents("../models/seller.json");  
                 $data = json_decode($data, true); 
                foreach($data as $row)  
                {  
                   echo '<tr>
                   <td>'.$row["fullname"].'</td>
                   <td>'.$row["username"].'</td>
                   <td>'.$row["password"].'</td>
                  </tr>';  
                }  
         ?>

        </tbody>

    </table><br><br>
    <table border="1">
        <h1>Buyer</h1>
        <thead>
            <tr>
                <td>Full name</td>
                <td>User name</td>
                <td>password</td>
            </tr>
            

        </thead>
        <tbody>
            <?php
                $data = file_get_contents("../models/buyer.json");  
                 $data = json_decode($data, true); 
                foreach($data as $row)  
                {  
                   echo '<tr>
                   <td>'.$row["fullname"].'</td>
                   <td>'.$row["username"].'</td>
                   <td>'.$row["password"].'</td>
                  </tr>';  
                }  
         ?>

        </tbody>

    </table><br><br>

    <---show the user information-->

    <?php //include "../controllers/userAction.php"; ?>

    <?php include "includes/footer.php" ;?>

</body>
</html>