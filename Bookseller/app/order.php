<!DOCTYPE html>
<html>
<head>
	<title>Main Page </title>
	<link rel="stylesheet" type="text/css" href="../assets/css/nav.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../api/helper/check.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/order.css">

</head>
<body>
<!-- 	navigation bar -->
<?php include("../assets/includes/navigation_bar.php");?>	
<!-- 	navigation bar -->
<div class="billing_addr">
	<div class="form">
		<table>
			<tr><th><h2>Billing Address</h2></th></tr>
			
				<form id="orderdetail">
				<tr><td><label>FullName</label></td><td><input type="text" id="fullname"></td></tr>
					<tr><td><label>Street Address</label></td><td><input type="text" id="streetadr"></td></tr>
					<tr><td><label>city</label></td><td><input type="text" id="city"></td></tr>
					<tr><td><label>postcode</label></td><td><input type="text" id="postcode"></td></tr>
					<tr><td><label>state</label></td><td><input type="text" id="state"></td></tr>
					<tr><td><label>country</label></td><td><input type="text" id="country"></td></tr>
				
			
		</table>

	</div>
	<div class="Order">
		<table>
			<tr><th>Order Summery</th></tr>
			<tr><td> Total Price</td><td>something</td></tr>
			<tr><td> Total Tax</td><td>something</td></tr>
			<tr><td> Final Price</td><td>something</td></tr>
			<tr><th>Choose Payment Option</th></tr>
			<tr><td><input type="checkbox"><label>Cash On Delivery</label></td></tr>
		</table>
		</div>
		<div class="confirm">
			<form>
			<input type="submit" value="Confirm Order" id="confrm">
			</form>
		</div>
		</form>
	
</div>




<!-- footer  -->
	<?php include("../assets/includes/footer.php");?>
<!-- footer -->
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	
	$("#orderdetail").on("submit",function(e){

		e.preventDefault();
		var dataTopost = {
			fullname:$("#fullname").val(),
			street:$("#streetadr").val(),
			city:$("#city").val(),
			postcode:$("#postcode").val(),
			state:$("#state").val(),
			country:$("#country").val()
		};
		
		$.ajax({
			url:"http://localhost/Bookseller/api/Controler/order_controler.php?operation=insert",
			type:"POST",
			data:dataTopost,
			success:function(res){
				if(res == "Inserted Successfully"){
					swal("Success", "your order is confirmed", "success");
				}
				else{
					swal("Error", "Something Went wrong", "Error");
				}
			}
		});

	});
	
</script>
<script type="text/javascript" src="../assets/js/jq.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>