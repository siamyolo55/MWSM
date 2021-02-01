<?php
include 'db_conn.php';
$conn = OpenCon();

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$query = "SELECT * FROM login WHERE username='{$username}' AND password='{$password}' ";
$result = $conn->query($query);

if($result->num_rows == 1){
	echo '<script>window.location.href = "home.php";</script>';
}
else{
	echo '<script>window.location.href = "wrong.php";</script>';
}
$result->close();
?>