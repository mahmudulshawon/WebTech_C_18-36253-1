<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>  
		function valid() {
	// body...
	var userName = document.forms["form"]["userName"].value;
	var password = document.forms["form"]["password"].value;

	var flag = true;
    if(userName===""){
    	document.getElementById('userNameError').innerHTML="Field can't be empty";
    	flag = false;
    }
     if(password===""){
    	document.getElementById('passwordError').innerHTML="Field can't be empty";
    	flag = false;
    }
    return flag;
}
</script>  
</head>
<body>
<?php include "includes/header.php" ;?>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
    <?php include "includes/footer.php" ;?>
  </body>
</html>
