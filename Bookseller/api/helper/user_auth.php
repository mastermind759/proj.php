<?php

	class auth
	{
 

	 	public  function user_auth($type='')
	 		{

	 			$headers = apache_request_headers();
	 			$token = $headers['Authorization'];
	 			$data = explode(" ",$token);
	 			// print_r($data);
	 			$creds = explode(":",base64_decode($data[1]));
	 			// print_r($creds);


	 			$conn = new mysqli("localhost","root","","books");

	 			$qry = "SELECT cust_id,Fullname,email FROM register WHERE username ='".$creds[0]."' AND password ='".$creds[1]."'";
	 			
	 			// echo $qry;


	 			 $result = $conn->query($qry);
	 			 if($result->num_rows==1)
	 			 {
	 			 	if($type=='login')
	 			 	{
	 			 		echo json_encode(mysqli_fetch_all($result , MYSQLI_ASSOC));
	 			 	}
	 			 	else
	 			 	{
	 			 		return false;
	 			 	}
	 			 }
	 			 else
	 			 {
	 			 	return false;
	 			 }
	 		
	 		}	
	}
?>