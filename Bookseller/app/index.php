<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body class="bg-info justify-content-center">
	<div class="jumbotron">
		<h1 >Please enter your details </h1>

	<div class="container pt-2">
		<div class="row">
			<form method="POST" action="" id="signUpForm">
				<div class="col-md-6  ">
						<div class="form-group ">
										
										    <div class="col">
										    	 <label for="formGroupExampleInput">Fullname</label>
										      <input type="text" class="form-control" placeholder="Full name" id="fullname">
										    </div>
		                         <label for="exampleInputEmail1">Email address</label>
		   							 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="Email" placeholder="Email">
		    							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>
		                         <label for="formGroupExampleInput">Username</label>
										 <input type="text" class="form-control" placeholder="Username" id="username" onkeyup="checkuname(this.value)">
										 <label for="formGroupExampleInput">Password</label>
										 <input type="password" class="form-control" placeholder="Password" id="password">
										 <input type="submit" name="" type="button" class="btn btn-primary " id="submitbutton">
						</div>	 
				</div>
			</form>
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

	$("#signUpForm").on("submit", function(e){
		
		e.preventDefault();
		var dataTopost = {
			fullname:$("#fullname").val(),
			email:$("#email").val(),
			username:$("#username").val(),
			password:$("#password").val()
		
		};

		
		
		$.ajax({
			url:"http://localhost/Bookseller/api/controler/register_controler.php?operation=insert",
			type:"POST",
			data:dataTopost,
			success:function(res){
				if(res=="registered sucessfull"){

							swal("Sucess", "user register successfully", "success").then(function(p){
								location.href ="login.php"
							});

				}
				else{

					swal("Sorry", "Something Went wrong", "Error");
				}
			}
		});
	
	});

		
	 
	
	function checkuname(puname){

		$.ajax({
			url:"http://localhost/Bookseller/api/Controler/user_controler.php?operation=check_username&puname="+puname,
			type:"GET",
			success:function(res){
				if(res =="username_available"){
						$("#username").addClass("bg-danger");
						$("#username").removeClass("bg-success");
						$("#submitbutton").attr('disabled','disabled');
						console.log("not available");
					}
					else{
						$("#username").addClass("bg-success");
						$("#username").removeClass("bg-danger");
						$("#submitbutton").removeAttr('disabled','disabled');
						console.log(" Available");
					}
			}
		});
	}

</script>
<script type="text/javascript" src="../assets/js/jq.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>