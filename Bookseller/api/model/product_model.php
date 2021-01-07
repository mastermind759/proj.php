<?php
 	
 class product_model{

 	function __construct(){

 			$this->conn = new mysqli("localhost","root", "","books");

 			// if($conn->connect_errno==0){
 			// 	echo"connection succesfull";
 			// }
 			// else{
 			// 	echo"<h1>". $conn->connect_errno."</h1>";
 			// }

 		}

 	function addproduct(){

 		$qry = "INSERT INTO `products` ( `book_title`, `book_price`,`book_img`) VALUES ( '".$_POST['book_title']."', '".$_POST['book_price']."', '".$_POST['book_img']."')";
 			echo $qry;
 			
 			$result = $this->conn->query($qry);
 			echo $result;
 			 if($result == true){
 			 	echo "registered sucessfull";
 			 }
 			 else{
 			 	echo " registration is not succesfull";
 			 }
 			

 		}

 	function showproduct(){

 			$qry = " SELECT * FROM products ";
 			$result = $this->conn->query($qry);
 			// var_dump($result);
 			$data = mysqli_fetch_all($result , MYSQLI_ASSOC );
 			header("Content-type: application/json");
 			echo json_encode($data);
 		} 
 						
 	function removeproduct(){

 			$qry = " DELETE FROM `products` WHERE `products`.`book_id` = '".$_POST['book_id']."'";

 			$result = $this->conn->query($qry);
 			echo $result;
 			 if($result == true){
 			 	echo "Removed sucessfull";
 			 }
 			 else{
 			 	echo " product  is not Removed succesfull";
 			 }
 	}
 }
 

?>