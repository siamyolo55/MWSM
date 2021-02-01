<?php

	include 'db_conn.php';
	$conn = OpenCon();
	$name=null;
	$age=null;
	$gender=null;
	$religion=null;
	$username=null;
	$password=null;
	$pref=null;
	$bio=null;
	$phone=null;
	$address=null;
	$parents=null;
	$job_status=null;
	$job_details=null;

	$name = $conn->real_escape_string($_POST['name']);
	$ages = $conn->real_escape_string($_POST['age']);
	$age = (int)$ages;
	$gender = $conn->real_escape_string($_POST['gender']);
	$religion = $conn->real_escape_string($_POST['religion']);
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	$pref = $conn->real_escape_string($_POST['pref']);
	$bio = $conn->real_escape_string($_POST['bio']);
	$phone = $conn->real_escape_string($_POST['phone']);
	$address = $conn->real_escape_string($_POST['address']);
	$parents = $conn->real_escape_string($_POST['parents']);
	$job_status = $conn->real_escape_string($_POST['job_status']);
	$job_details = $conn->real_escape_string($_POST['job_details']);

	$query = "INSERT INTO login
            VALUES ('{$username}','{$password}')";
    $conn->query($query);

    if($gender=="M"){
    	$query1 = "INSERT INTO groom
            VALUES ('{$username}','{$name}',$age,'{$gender}','{$religion}')";
    	$conn->query($query1);

    	$query2 = "INSERT INTO groom_det
            VALUES ('{$username}','{$parents}','{$job_status}','{$job_details}','{$phone}','{$address}')";
    	$conn->query($query2);

    	$query3 = "INSERT INTO groom_pref
            VALUES ('{$username}','{$pref}','{$bio}')";
    	$conn->query($query3);


    }
    if($gender=="F"){
    	$query1 = "INSERT INTO bride
            VALUES ('{$username}','{$name}',$age,'{$gender}','{$religion}')";
    	$conn->query($query1);

    	$query2 = "INSERT INTO bride_det
            VALUES ('{$username}','{$parents}','{$job_status}','{$job_details}','{$phone}','{$address}')";
    	$conn->query($query2);

    	$query3 = "INSERT INTO bride_pref
            VALUES ('{$username}','{$pref}','{$bio}')";
    	$conn->query($query3);
    }

    $conn->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation</title>
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
			<h1> DONE! </h1>
			<a href="index.php">Back to login</a>
		</div>
	</body>
</html>