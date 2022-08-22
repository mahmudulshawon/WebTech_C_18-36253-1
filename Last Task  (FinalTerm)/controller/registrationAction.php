<?php

include'../view/config.php';
include'../model/sellerregdb.php';

include'../model/userCheck.php';
	//value inititalizing
	$name = $email =  $user = $password = "";
	//error msg initializing 
		$nameError =  $emailError  = $userError = $passwordError = "";

		$Successful = $Error = "";

		$flag = false;
function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
  if($_SERVER['REQUEST_METHOD']==="POST"){
  	//validating
			if(empty($_POST['name'])){
				echo  "Field can' be empty";
				$flag = true;
			}

			

			if(empty($_POST['mail'])){
				echo "Field can' be empty";
				$flag = true;
			}

		

			if(empty($_POST['userName'])){
				echo "Field can' be empty";
				$flag = true;
			}

			if(empty($_POST['password'])){
				echo "Field can' be empty";
				$flag = true;
			}
				//if all field validated
			if(!$flag)
			{
				$name = input_data($_POST['name']);
				
				$email = input_data($_POST['mail']);
				
				$user = input_data($_POST['userName']);
				$password = input_data($_POST['password']);
				
				
				
				$getResult = get($user);
				if($getResult){
					echo "User name already exist";
				}
				else{
					 $result = register($name,$email,$user,$password);
              if($result){
              	echo "Registration Successfully Done...!!!";
              	
              }
              else{
              	echo "Registration failed";
              }

				

				}

			 



            

       

			}

  }
?>