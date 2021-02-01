<?php
include 'db_conn.php';
$conn = OpenCon();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/cstyle.css">

</head>

<body>
	
	<div align="center">
		<h1 class="hed"> MATRIMONIAL WEB SYSTEM </h1><br>
		<form action="check.php" onsubmit="return valiUser()" method="POST">
			<div class="container">
				<label><h3><b> Username :</b></h3></label> <input type="text" placeholder="Enter Username" name="username" required><br>
			
				<label><h3><b> Password :</b></h3></label> <input id="upass" type="password" onkeypress="name()" placeholder="Enter Password" name="password" required><br>
				<b id="fill"></b>
				<button type="submit"><b class="but">Login</b></button>
			</div>
		</form>
		<br>
		<br>

		<form action="reg.php" method="POST">
			<label><b class="eh">New here?</b></label><br>
			<button type="submit"><b class="but">Register</b></button>
		</form>
	</div>
	<script type="text/javascript">
		document.getElementById("upass").onkeypress = function() {name()};
		function name(){
			document.getElementById("fill").innerHTML = "";
			var x = document.getElementById("upass").value;
			if(x==null || x==""){
				document.getElementById("fill").innerHTML = "Password can't be empty!";
			}
		}


	</script>

</body>

</html>