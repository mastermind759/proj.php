<?php
	
	
 	
 class register_model {

 	function __construct()
 	{

 			$this->conn = new mysqli("localhost","root", "","books");

 			// if($conn->connect_errno==0){
 			// 	echo"connection succesfull";
 			// }
 			// else{
 			// 	echo"<h1>". $conn->connect_errno."</h1>";
 			// }

 		}

 	function adduser(){

 			
 			
 			$qry = "INSERT INTO `register` ( `Fullname`, `username`, `password`, `email`) VALUES ( '".$_POST['fullname']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."')";
 			
 			
 			$result = $this->conn->query($qry);
 			
 			 if($result == true){
 			 	echo "registered sucessfull";
 			 }
 			 else{
 			 	echo " registration is not succesfull";
 			 }
 			
 			

 		}

 	function listuser(){

 			
 			$qry = " SELECT * FROM register ";
 			$result = $this->conn->query($qry);
 			// var_dump($result);
 			$data = mysqli_fetch_all($result , MYSQLI_ASSOC );
 			header("Content-type: application/json");
 			echo json_encode($data);
 			
 		} 
 						
 	}
 

?>