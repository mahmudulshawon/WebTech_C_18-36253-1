<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 

		$comment="";
		$commentEr='';
		$flag=false;
		$successMesg = $errorMesg = "";
		
		if(htmlspecialchars($_SERVER['REQUEST_METHOD']=="POST"))
		{
			$comment =$_POST["comment"];
			
			if(empty($comment))
			{
				$commentEr="Comment is required  ";
				$flag=true;
				
			}
			else
			{
				$comment=senitize($comment);
				$flag=false;
			}

			if(!$flag)
				{
					$filename="../models/reviews.json";
					$mode="a";
					$handle=fopen($filename, $mode);

					$arr1=array(
								
								'comment'=>$comment
							);

					$encode=json_encode($arr1);
					$current_data = file_get_contents($filename);  
					$array_data = json_decode($current_data, true);  //array

					$arr2=array(
								'comment'=>$comment
							);

					$array_data[]=$arr2;

					$final_encode=json_encode($array_data);

					fwrite($handle, $final_encode);

					$read_data=file_put_contents('../models/reviews.json', $final_encode);

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