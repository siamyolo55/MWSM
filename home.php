<?php

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/cstyle.css">
</head>

<body>
	<div>
		<ul>
		  <li><a href="#home">Home</a></li>
		  <li><a href="#news">News</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <li><a href="#about">About</a></li>
		  <li><a id="ml" href="index.php">Logout</a></li>
		</ul>
	</div>
	<br>
	<div class="container" align="center">
		<h1 class="hed">PATRO PATRI KHUJUN EKHANE!</h1>
	</div>
	<div class="container" align="center">
		<h2>Searching options</h2>
		<form action="search.php" method="POST">
			<br>
			<label><h3><b>Partner Gender : </b></h3></label>
			<select name="gender">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			<br>
			<label><h3><b> Minimum Age : </b></h3></label><input type="text" placeholder="18+" name="min_age"><br>
			<label><h3><b> Maximum Age : </b></h3></label><input type="text" placeholder="<40" name="max_age"><br>
			<label><h3><b> Religion : </b></h3></label><input type="text" placeholder="eg. Islam , Hindu , Christian. Should be capitalized" name="religion"><br>
			
			<button type="submit"><b class="but">Search</b></button>
		</form>
	</div>
	
	
</body>

</html>