<?php
//include'../model/sellerregdb.php';
function get($userName){
	$conn = connect();
	$query = $conn->prepare("SELECT * FROM tb_user WHERE userName = ?");
	$query->bind_param("s",$userName);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
?>