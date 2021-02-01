<?php
	include 'db_conn.php';
	$conn = OpenCon();

	$gender = $conn->real_escape_string($_POST['gender']);
	$min_ages = $conn->real_escape_string($_POST['min_age']);
	$min_age = (int)$min_ages;
	$max_ages = $conn->real_escape_string($_POST['max_age']);
	$max_age = (int)$max_ages;
	$religion = $conn->real_escape_string($_POST['religion']);

	if($gender=="M"){
		$query = "SELECT username,name,age,religion FROM groom WHERE age>=$min_age AND age<=$max_age AND religion='{$religion}'";
    	$conn->query($query);

    	if ($result = $conn->query($query)) {
		    while ($row = $result->fetch_assoc()) {
		        $mArr[] = $row["name"];
		        $mUser[] = $row["username"];
		        $mAge[] = $row["age"];
		        $mRel[] = $row["religion"];
		    }
    	}
    	foreach($mUser as $user){
    		$query = "SELECT parents,job_status,job_details,phone,address FROM groom_det where username='{$user}'";
    		$conn->query($query);

    		if ($result = $conn->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			        $mPar[] = $row["parents"];
			        $mJobS[] = $row["job_status"];
			        $mJobD[] = $row["job_details"];
			        $mPhone[] = $row["phone"];
			        $mAdd[] = $row["address"];
			    }
    		}
    		$query = "SELECT pref,bio FROM groom_pref where username='{$user}'";
    		$conn->query($query);

    		if ($result = $conn->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			        $mPref[] = $row["pref"];
			        $mBio[] = $row["bio"];
			    }
    		}
    	}
    
	}
	if($gender=="F"){
		$query = "SELECT username,name,age,religion FROM bride WHERE age>=$min_age AND age<=$max_age AND religion='{$religion}'";
    	$conn->query($query);

    	if ($result = $conn->query($query)) {
		    while ($row = $result->fetch_assoc()) {
		        $fArr[] = $row["name"];
		        $fUser[] = $row["username"];
		        $fAge[] = $row["age"];
		        $fRel[] = $row["religion"];
		    }
    	}
    	foreach($fUser as $user){
    		$query = "SELECT parents,job_status,job_details,phone,address FROM bride_det where username='{$user}'";
    		$conn->query($query);

    		if ($result = $conn->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			        $fPar[] = $row["parents"];
			        $fJobS[] = $row["job_status"];
			        $fJobD[] = $row["job_details"];
			        $fPhone[] = $row["phone"];
			        $fAdd[] = $row["address"];
			    }
    		}
    		$query = "SELECT pref,bio FROM bride_pref where username='{$user}'";
    		$conn->query($query);

    		if ($result = $conn->query($query)) {
			    while ($row = $result->fetch_assoc()) {
			        $fPref[] = $row["pref"];
			        $fBio[] = $row["bio"];
			    }
    		}
    	}
	}
	$result->free();
	CloseCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
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
		<h1> Search Results </h1>
		<hr>

			<?php

			if($gender=="M"){

				$len = count($mArr);

				for($i = 0 ; $i < $len ; $i++){
			?>
		<div class="show">			
			<h2><?php echo $mArr[$i];?></h2>
			<div>
				<h3>Age : </h3><p><?php echo $mAge[$i];?></p>
			</div>
			<div>
				<h3>Religion : </h3><p><?php echo $mRel[$i];?></p>
			</div>
			<div>
				<h3>Parents : </h3><p><?php echo $mPar[$i];?></p>
			</div>
			<div>
				<h3>Job Status : </h3><p><?php echo $mJobS[$i];?></p>
			</div>
			<div>
				<h3>Phone : </h3><p><?php echo $mPhone[$i];?></p>
			</div>
			<div>
				<h3>Address : </h3><p><?php echo $mAdd[$i];?></p>
			</div>
			<div>
				<h3>Preference : </h3><p><?php echo $mPref[$i];?></p>
			</div>
			<div>
				<h3>Bio : </h3><p><?php echo $mBio[$i];?></p>
			</div>
			<hr>
		</div>
		<br>

			<?php
					}
				}
			
				if($gender=="F"){

					$len = count($fArr);

					for($i = 0 ; $i < $len ; $i++){
			?>

		<div class="show">				
			<h2><?php echo $fArr[$i];?></h2>
			<div>
				<h3>Age : </h3><p><?php echo $fAge[$i];?></p>
			</div>
			<div>
				<h3>Religion : </h3><p><?php echo $fRel[$i];?></p>
			</div>
			<div>
				<h3>Parents : </h3><p><?php echo $fPar[$i];?></p>
			</div>
			<div>
				<h3>Job Status : </h3><p><?php echo $fJobS[$i];?></p>
			</div>
			<div>
				<h3>Phone : </h3><p><?php echo $fPhone[$i];?></p>
			</div>
			<div>
				<h3>Address : </h3><p><?php echo $fAdd[$i];?></p>
			</div>
			<div>
				<h3>Pref : </h3><p><?php echo $fPref[$i];?></p>
			</div>
			<div>
				<h3>Bio : </h3><p><?php echo $fBio[$i];?></p>
			</div>
			<hr>
		</div>
		<br>
			<?php
					}
				}
			?>

</body>
</html>