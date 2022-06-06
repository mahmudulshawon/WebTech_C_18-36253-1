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
$nameErr = $emailErr = $genderErr = $dateErr = $degreeErr = $bgroupErr= "";
$name = $email = $gender = $date = $degree = $bgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

   if (empty($_POST["date"])) {
    $dateErr = "date is required";
  } else {
    $date = $_POST["date"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "degree is required";
  } else {
    $degree = $_POST["degree"];
  }

   if (empty($_POST["bgroup"])) {
    $degreeErr = "Blood group is required";
  } else {
    $bgroup = $_POST["bgroup"];
  }

}



?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  Name: 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  E-mail: 
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Date:
  <label for="date"></label>
  <input type="date" id="date" name="date">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>
  

 
  Degree:
  <input type="checkbox" id="degree" name="degree" value="SSC">
  <label for="degree">SSC</label>
  <input type="checkbox" id="degree" name="degree" value="HSC">
  <label for="degree">HSC</label>
  <input type="checkbox" id="degree" name="degree" value="BSC">
  <label for="degree">BSC</label>
  <input type="checkbox" id="degree" name="degree" value="MSC">
  <label for="degree">MSC</label>
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>


  Blood Group:
 <label for="Blood">Blood Group:</label>
  <select name="Blood" id="Blood">
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="B+">B+</option>
    <span class="error">* <?php echo $bgroupErr;?></span>
    <br><br>

  <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $date;
echo "<br>";
echo $degree;
echo "<br>";
echo $bgroup;
?>

</body>
</html>