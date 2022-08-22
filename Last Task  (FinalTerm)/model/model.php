<?php 

require_once 'db_connect.php';











function addProduct($data){
	$conn = db_conn();
    error_reporting(0);
    $selectQuery = "INSERT into product_info (Name, Description, Price, image)
VALUES (:name, :description,:price, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	
        	':description' => $data['description'],
            
        	':price' => $data['price'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


