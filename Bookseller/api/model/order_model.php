<?php

	class order_model{
	function __construct(){

 			$this->conn = new mysqli("localhost","root", "","books");
 		}


 	 function addorder(){

 		$qry = "INSERT INTO `order`(`fullname`,`street`,`city`,`postcode`,`state`,`country`)VALUES('".$_POST['fullname']."','".$_POST['street']."','".$_POST['city']."','".$_POST['postcode']."','".$_POST['state']."','".$_POST['country']."')";

 		$result = $this->conn->query($qry);

 		if($result){

 			echo "Inserted Successfully";
 		}
 		else{

 			echo "Not Inserted";
 		}
 	}	
 	}
?>