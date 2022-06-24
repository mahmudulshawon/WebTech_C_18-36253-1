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
	<title></title>
</head>
<body>
	
     <?php include "includes/header.php" ;?>
	<?php include "../controllers/reviewsAction.php" ;?>
	<br><br>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		

			<legend>Reviews</legend>

			Comment *: <br><input type="textarea" id="comment" name="comment" value="<?php echo $comment;?>">
			<span><?php echo $commentEr;?></span>
			
			<br><br>
			

			<input type="submit" name="submit" value="Submit">
			<br><br>
			<a href="buyerHome.php">Back</a>
            <br><br>

	</form>
	<span><?php echo $successMesg;?></span>
	<span><?php echo $errorMesg;?></span>
    <?php include "includes/footer.php" ;?>
</body>
</html>
