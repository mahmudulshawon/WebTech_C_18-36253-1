<?php
//include'../view/config.php';
  function register($name,$email,$userName,$password){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO tb_user(name,,email,userName,password) VALUES(?,?,?,?)");
	$stmt->bind_param("ssssssssssss",$name,$email,$userName,$password);
	$res = $stmt->execute();
	return $res;
}

?>