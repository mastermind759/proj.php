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
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<script type="text/javascript">
	window.onload = check();

	function check(){
		var data = JSON.parse(localStorage.getItem('user'));
		var len = Object.keys(data).length;
		console.log(len);
		if(len==null){
			location.href = "detail.php";
		}
		
	};

	;
</script>
</head>
<body>
<!-- 	navigation bar -->
<?php include("../assets/includes/navigation_bar.php");?>	

<!-- 	navigation bar -->	
<div class="container">
	<div class="row">

			<?php
		        $qry = "SELECT * FROM products ORDER BY book_id ASC";
		        $result = mysqli_query($conn,$qry);

		        if(mysqli_num_rows($result) > 0){

		            while ($row = mysqli_fetch_array($result))
		             {

		    ?> 
		  
			<form >
			<div class="col">
				<div class="card">
					<div class="title">
						<p><?php echo $row['book_title'];?></p>
					</div>
					<div class="img">
						<img  src="../images/<?php echo $row['book_img'];?>" >
					</div>
					<div class="card-body">
						<p style="color: red"> PRICE : <?php echo $row['book_price']; ?></p>
					</div>
					<div class="btn">
						
						<input type="button" value="BUY NOW" data-modal-target="#modal">
						
				    </div>
			    </div> 
			</div>
			</form>      
			<?php                
			  }
			  }
			?>
	<div class="modal" id="modal">
    <div class="modal-header">
           
    </div>
    <div class="modal-body">
       Your Product is added sucessfully in cart !
    </div>
     <div class="checkout">
      <form method="POST" action="" id="chekOutform">
      <input type="Submit" class="cheout-btn" name="" value="CheckOut" id="checkout" onclick="function()">
      <div style="margin-left = 10px; float: left;">
      <input type="submit" class="cheout-btn" name=""
      value="continue shopping" data-close-button class="close-button">
  </div>
    </form>
    </div>
  </div>
	 <div id="overlay"></div>
	</div>
</div>

<!-- footer  -->
	<?php include("../assets/includes/footer.php");?>
<!-- footer -->
<script type="text/javascript" src="../assets/js/jquery.js"></script>

<script type="text/javascript">
	
	$("#chekOutform").on("submit",function(){

		location.href = "checkout.php";
	});

</script>
<script type="text/javascript" src="../api/helper/check.js"></script>
<script type="text/javascript" src="../assets/js/jq.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>	
</body>
</html>