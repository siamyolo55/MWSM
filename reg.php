<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/cstyle.css">
</head>

<body>

	<div>
		<ul>
		  <li><a href="#home">Home</a></li>
		  <li><a href="#news">News</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <li><a href="#about">About</a></li>
		</ul>
	</div>
	<br>

	<div class="container" align="center">
		<form action="insert.php" method="POST">
			<div class="wut">
				<h1>Register</h1>
				<hr>
				<label><b class="eh">Name : </b></label><input type="text" id="name" onkeypress="name()" placeholder="Full Name" name="name" required><br>
				<p id="show"></p>
				<label><b class="eh">Age : </b></label><input type="text" id="age" onkeypress="age()" placeholder="Age , must be 18+" name="age" required><br>
				<p id="show1"></p>
				<label><b class="eh">Gender : </b></label>
					<select name="gender">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select><br>
				<br>
				<label><b class="eh">Religion : </b></label><input type="text" placeholder="eg. Islam,Christian,Hindu etc. capitalized" name="religion" required><br>
				<label><b class="eh">New Username : </b></label><input type="text" placeholder="Combination of any number or letter" name="username" required><br>
				<label><b class="eh">Password : </b></label><input id="pass" type="password" onkeypress="pass()" placeholder="Size should be at least 8" name="password" required><br>
				<p id="show3"></p>
				<label><b class="eh">Personal Preferences : </b></label><input type="text" placeholder="Your Preferences" name="pref" required><br>
				<label><b class="eh">Bio : </b></label><br><input type="text" placeholder="About you" name="bio" required><br>
				<label><b class="eh">Phone : </b></label><input id="phone" onkeypress="phone()" placeholder="eg 01914798652 " type="text" name="phone" required><br>
				<p id="show2"></p>
				<label><b class="eh">Address : </b></label><input type="text" name="address" placeholder="Present Address" required><br>
				<label><b class="eh">Parents Name(s) : </b></label><input type="text" placeholder="Guardian" name="parents" required><br>
				<label><b class="eh">Job Status : </b></label><input type="text" placeholder="Current Job" name="job_status" required><br>
				<label><b class="eh">Job Details : </b></label><input type="text" placeholder="eg. Company Name, position etc." name="job_details" required><br><hr>
				<button type="submit"><b class="but">Register</b></button><br>

			</div>
			
		</form>

	</div>
	<script type="text/javascript">
		
		document.getElementById("name").onkeypress = function() {name()};
		document.getElementById("age").onkeypress = function() {age()};
		document.getElementById("phone").onkeypress = function() {phone()};
		document.getElementById("pass").onkeypress = function() {pass()};

		function name(){
			document.getElementById("show").innerHTML = "";
			var ex = /[0-9]/g;
			var x = document.getElementById("name").value;
			var result = x.match(ex);
			if(result.length>0){
				document.getElementById("show").innerHTML = "Name can't contain digit(s)";
			}
			else if(x==null || x==""){
				document.getElementById("show").innerHTML = "Name can't be empty";
			}
		}
		function age(){
			document.getElementById("show1").innerHTML = "";
			var x = document.getElementById("age").value;
			var ex = /[a-z]/i;
			var result = x.match(ex);
			if(result.length>0){
				document.getElementById("show1").innerHTML = "Age can't contain letter(s)";	
			}
		}
		function phone(){
			document.getElementById("show2").innerHTML = "";
			var x = document.getElementById("phone").value;
			var ex = /[a-z]/i;
			var result = x.match(ex);
			if(result.length>0){
				document.getElementById("show2").innerHTML = "Phone number can't contain letter(s)";	
			}
		}
		function pass(){
			document.getElementById("show3").innerHTML = "";
			var x = document.getElementById("pass").value;
			if(x.length<7){
				document.getElementById("show3").innerHTML = "Password size should be at least 8.";
			}
		}

	</script>

</body>
</html>