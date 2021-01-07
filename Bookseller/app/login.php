<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body class="bg-info justify-content-center">
	<div class="jumbotron">
		<h1 >Sign up </h1>
	<div class="container pt-2">
		<div class="row">
			<div class="col-md-6  ">
				<form method="POST" id="signUpform">
				<div class="form-group ">
					<label for="formGroupExampleInput">Username</label>
					 <input type="text" class="form-control" placeholder="Username" id="username">
					 <label for="formGroupExampleInput">Password</label>
					 <input type="password" class="form-control" placeholder="Password" id="password">
					 <input type="submit" class="btn btn-primary" value="SignUp">
				</div>
				</form>	 
			</div>
			<div class="col-md-6">
				<div class="thumbnail">
					<img src="../assets/images/book.jpg" class="img-rounded" alt="Responsive image">
				</div>
			</div>	
	</div>
</div>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	
	$("#signUpform").on("submit",function(e){

		e.preventDefault();
		var dataTopost = {
			username : $("#username").val(),
			password : $("#password").val()
		};
		
		// console.log(strdataTopost);
		localStorage.setItem('user',JSON.stringify(dataTopost));
	


		$.ajax({

			url :"http://localhost/Bookseller/api/Controler/user_controler.php?operation=login",
			type :"POST",
			data :dataTopost,
			success : function(res){
				
				console.log(res);

				if(res =="true") {
					location.href = "mainpage.php";
				}
				else{
					swal("Sorry", "invalid credentials", "Error");
				}
			}
		});
	});



</script>
<script type="text/javascript" src="../assets/js/jq.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>