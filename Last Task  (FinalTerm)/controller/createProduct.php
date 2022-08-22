<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	
	$data['name'] = $_POST['name'];
	
	$data['description'] = $_POST['description'];
	
	
	$data['price'] = $_POST['price'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>