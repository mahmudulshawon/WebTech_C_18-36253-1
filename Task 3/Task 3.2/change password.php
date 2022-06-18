<!DOCTYPE HTML>  
<html style="text-align:center;">
<head>
<style>
  
.error {color: #FF0000;} //date gender degree bgroup
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$currpasswordErr = $newpasswordErr = $retypenewpasswordErr ="";
 $currpassword = $newpassword = $retypenewpassword =  "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["Current Password"])) {
      $currpasswordErr = "Current Password is required";
    } else {
      $currpassword = $_POST["current password"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$currpassword)) {
        $currpasswordErr = "Only letters and white space allowed";
      }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["New Password"])) {
        $newpasswordErr = "New Password is required";
      } else {
        $newpassword = $_POST["new password"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$newpassword)) {
          $newpasswordErr = "Only letters and white space allowed";
        }
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["Retype New Password"])) {
          $retypenewpasswordErr = "Retype New Password is required";
        } else {
          $retypenewpassword = $_POST["retype new  password"];
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$retypenewpassword)) {
            $retypenewpasswordErr = "Only letters and white space allowed";
          }
        }
  
    
  
}
}
  }



?>

<h2>Change Password</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  
  
 Current  Password: 
  <input type="text" name="current password" value="<?php echo $currpassword;?>">
  <span class="error">* <?php echo $currpasswordErr;?></span>
  <br><br>

  New Password:
  <input type="text" name="new password" value="<?php echo $newpassword;?>">
  <span class="error">* <?php echo $newpasswordErr;?></span>
  <br><br>
  Retype New Password:
  <input type="text" name="retype new password" value="<?php echo $retypenewpassword;?>">
  <span class="error">* <?php echo $retypenewpasswordErr;?></span>
  <br><br>

  
  

  <input type="submit" name="submit" value="Submit"> 
</form>
</body>
</html>