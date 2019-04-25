<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "vibhi2112";
	$dbname = "outpass";

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$_SESSION['uname'] = $user;

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		# code...
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT Password, Designation FROM user WHERE Username = '" . $user . "'";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		# code...
		$row = $result -> fetch_assoc();
		$res = $row['Password'];

		if ($res == $pass) {
			# code...
			if ($row['Designation'] == 'Student') {
				# code...
				header("location: student.php");
			}
			elseif ($row['Designation'] == 'Faculty') {
				# code...
				header("location: faculty.php");
			}
			elseif ($row['Designation'] == 'Warden') {
				# code...
				header("location: warden.php");
			}
		}
	}
?>