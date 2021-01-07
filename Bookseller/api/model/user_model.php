<?php

	include '../helper/user_auth.php';
 	
 class user_model extends auth{

 	function __construct(){

 			$this->conn = new mysqli("localhost","root", "","books");

 		// 	if($conn->connect_errno==0){
 		// 		echo"connection succesfull";
 		// 	}
 		// 	else{
 		// 		echo"<h1>". $conn->connect_errno."</h1>";
 		// 	}

 		}

 	function adduser(){

 			if($this->user_auth())
 			{	
 			$qry = "INSERT INTO users(username, password)VALUES('".$_POST['username']."','".$_POST['password']."')";
 			$result = $this->conn->query($qry);
 			 if($result == true){
 			 	echo "inserted sucessfull";
 			 }
 			 else{
 			 	echo " user is not added";
 			 }
 			}
 			else{
 				echo "authentication is failed";
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

 	public function login()
 	{			
 		// $this->user_auth('login');
 		$qry = "SELECT * FROM `register` WHERE username = '".$_POST['username']."' AND password ='".$_POST['password']."'";
 		
 		$result = $this->conn->query($qry);

 		if($result->num_rows >0){

 			echo "true";
 		}
 		else{
 			echo "false";
 		}

 		
 		}

 	public function check_username($potential_username){

 		$qry = "SELECT cust_id FROM register WHERE username = '".$potential_username."';";

 		$res = $this->conn->query($qry);

 		

 		if($res->num_rows>0){

 			echo "username_available";
 		}
 		else
 		{
 			echo "username not available";
 		}	
 	}
 						
 }
 

?>