<!DOCTYPE HTML>  
<html style="text-align:center;">
<head>
<style>
.error {color: #FF0000;} 
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = $_POST["username"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = $_POST["password"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
        $passwordErr = "Only letters and white space allowed";
      }
    }
  
  
    
  
}
}



?>

<h2>Login</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  UserName: 
  <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  
  Password: 
  <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  
  <input type="checkbox" name="Remember?" id="Remember Me"> <label for="Remember Me">Remember Me</label>
  <br><br>

  <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>