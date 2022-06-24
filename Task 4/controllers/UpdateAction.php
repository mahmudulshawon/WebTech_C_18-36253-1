<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php 

	    $username=$password=$confirmpassword="";
		$usernameEr=$passwordEr=$confirmpasswordEr='';
		$flag=false;
		$successMesg = $errorMesg = "";

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test($_POST['username']);
			$password = test($_POST['password']);
			$confirmpassword = test($_POST['confirmpassword']);

			if (empty($username) or empty($password) or empty($confirmpassword)) {
				echo "Please fill up the form properly";
			}
			else {
				$handle = fopen("../models/buyer.json", "r");
				$fr = fread($handle, filesize("../models/buyer.json"));
				$arr1 = json_decode($fr);
				$fc = fclose($handle);

				$handle = fopen("../models/buyer.json", "w");

				for ($i = 0; $i < count($arr1); $i++) {
					if ($username == $arr1[$i]->username) {
						$arr1[$i]->password = $password;
						$arr1[$i]->confirmpassword = $confirmpassword;
					}
				}

				$data = json_encode($arr1);
				$fw = fwrite($handle, $data);
				$fc = fclose($handle);
				if ($fw) {
					echo "password Updated Successfully";
				}
			}
		}
	?>

	<hr><hr>

</body>
</html>