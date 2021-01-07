<?php
 	
 class cart_model{

 	function __construct(){

 		$this->conn = new mysqli("localhost","root", "","books");
 		// if($conn->connect_errno==0){
 			// 	echo"connection succesfull";
 			// }
 			// else{
 			// 	echo"<h1>". $conn->connect_errno."</h1>";
 			// }

 		}

 	function addproduct($user_id,$book_id,$book_title,$book_price){

 		$qry = "INSERT INTO `cart` ( `user_id`, `book_id`, `book_title`, `book_price`) VALUES ( '".$user_id."', '".$book_id."', '".$book_title."', '".$book_price."')";
 		$res =$this->conn->query($qry);
 		var_dump($res);

 		}

 	function listproduct($user_id){
 			
 			$qry= "SELECT * FROM `cart` WHERE user_id='".$user_id."'";
 			$res=$this->conn->query($qry);
 			if($res->num_rows > 0)
 			{
 			$data = mysqli_fetch_all($res , MYSQLI_ASSOC );
 			header("Content-type: application/json");
 			echo json_encode($data);
 			}
 			else{
 				echo "there is nothing in cart";
 			}
 			
 		} 
 						
 	}
 

?>