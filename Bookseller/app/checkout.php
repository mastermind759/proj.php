<?php

$conn = mysqli_connect("localhost","root","","books");
if(!$conn){
        echo ("we are unable to connect due to following error---->".mysqli_error($conn));
    }
    else{
        // echo ("connection is sucessfull !");
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Main Page </title>
	<link rel="stylesheet" type="text/css" href="../assets/css/nav.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../api/helper/check.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/checkout.css">

</head>
<body>
<!-- 	navigation bar -->
<?php include("../assets/includes/navigation_bar.php");?>	

<!-- 	navigation bar end-->	
<div class="container">
	<h1>CHECKOUT SUMMERY</h1>
	<TABLE>
	 <tr>
    <th>BOOK TITLE</th>
    <th>QUANTITY</th>
    <th>UNIT PRICE</th>
    <th>TOTAL PRICE</th>
    <th>REMOVE</th>
  </tr>
  <tr>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td></td>
  	<td><button class="remove">X</button></td>
  </tr>
</TABLE>
	<form action="#href">
	<input type="submit" name="proceed" value="PROCEED" class="proceed">
	</form>
</div>

<!-- footer  -->
	<?php include("../assets/includes/footer.php");?>
<!-- footer end -->
<script type="text/javascript" src="../api/helper/check.js"></script>	
</body>
</html>