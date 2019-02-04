<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "vibhi2112";
$dbname = "confrence";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$user = $_POST['username'];
$pass = $_POST['password'];

// echo $username . "<br />";

$sql = "SELECT Password FROM registration WHERE Username = '$user'";
$result = $conn->query($sql);
// echo $sql . "<br />";

if ($result !== FALSE) {
	$row = $result -> fetch_assoc();
	// echo $row["Password"];
	if ($row["Password"] == $pass) {
		# code...
		// echo "True";
		header("location: test0.php");
		$_SESSION['uname'] = $user;
	}
	// echo $row["Password"] . "<br/>";
    // echo "New record created successfully";
    // header("location: welcome.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

