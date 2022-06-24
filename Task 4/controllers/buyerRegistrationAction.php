<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 

		$fullname=$username=$pnumber=$gmail=$password=$confirmpassword="";
		$fullnameEr=$usernameEr=$pnumberEr=$gmailEr=$passwordEr=$confirmpasswordEr='';
		$flag=false;
		$successMesg = $errorMesg = "";
		
		if(htmlspecialchars($_SERVER['REQUEST_METHOD']=="POST"))
		{
			$fullname =$_POST["fullname"];
			$username=$_POST["username"];
			$pnumber=$_POST["pnumber"];
			$gmail=$_POST["gmail"];
			$password=$_POST["password"];
			$confirmpassword=$_POST["confirmpassword"];


			if(empty($fullname))
			{
				$fullnameEr="Full name is required  ";
				$flag=true;
				
			}
			else if(!preg_match("/^[a-zA-Z-' ]*$/",$fullname))
			{
				$fullnameEr="Only letters and white space allowed";
				$flag=true;

			}
			else
			{
				$fullname=senitize($fullname);
				$flag=false;
			}

			if(empty($username))
			{
				$usernameEr="User name is required  ";
				$flag=true;
				
			}
			else
			{
				$username=senitize($username);
				$flag=false;
			}

			if(empty($pnumber))
			{
				$pnumberEr="pnumber is required  ";
				$flag=true;
				
			}
			else
			{
				$pnumber=senitize($pnumber);
				$flag=false;
			}

			if(empty($gmail))
			{
				$gmailEr="gmail is required  ";
				$flag=true;
				
			}
			else
			{
				$gmail=senitize($gmail);
				$flag=false;
			}
			if(empty($password))
			{
				$passwordEr= "Password is  required  ";
				$flag=true;
				
			}
			else
			{
				$password=senitize($password);
				$flag=false;
			}
			if(empty($confirmpassword))
			{
				$confirmpasswordEr= "Confirm password is  required  ";
				$flag=true;
				
			}
			else if($confirmpassword!==$password)
			{
				$confirmpasswordEr= "Confirm password is  not matched  ";
				$flag=true;

			}
			else
			{
				$confirmpassword=senitize($confirmpassword);
				$flag=false;
			}

			
			if(!$flag)
				{
					$filename="../models/buyer.json";
					$mode="a";
					$handle=fopen($filename, $mode);

					$arr1=array(
								'fullname'=>$fullname,
								'username'=>$username,
								'pnumber'=>$pnumber,
								'gmail'=>$gmail,
								'password'=>$password,
								'confirmpassword'=>$confirmpassword
							);

					$encode=json_encode($arr1);
					$current_data = file_get_contents($filename);  
					$array_data = json_decode($current_data, true);  //array

					$arr2=array(
								'fullname'=>$fullname,
								'username'=>$username,
								'pnumber'=>$pnumber,
								'gmail'=>$gmail,
								'password'=>$password,
								'confirmpassword'=>$confirmpassword
							);

					$array_data[]=$arr2;

					$final_encode=json_encode($array_data);

					fwrite($handle, $final_encode);

					$read_data=file_put_contents('../models/buyer.json', $final_encode);

					if($read_data)
					{
						$successMesg="save successfully";

					}
					else
					{
						$errorMesg="error while saving";
					}

					
				}

			

			
	
		}
		function senitize($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;

		}
		
?>



</body>
</html>