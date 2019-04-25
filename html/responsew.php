<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "vibhi2112";
	$dbname = "outpass";

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$user = $_SESSION['uname'];

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		# code...
		die("Connection failed: " . $conn->connect_error);
	}

	$user_id = (int) $_POST['accept'];
	// echo $user_id;
	// echo $user;

	$sql0 = "SELECT * FROM warden WHERE No = " . $user_id . "";
	$result0 = $conn->query($sql0);
	// echo "5";
	$row0 = $result0->fetch_assoc();
	// echo $row0['ID'];

	$username = $row0['Applicant'];
	// echo $username;

	$student = $row0['Student'];
	$dept = $row0['Departure'];
	$arr = $row0['Arival'];
	$reason = $row0['Reason'];
	$gname = $row0['GuardianName'];
	$grel = $row0['GuardianRel'];
	$gemail = $row0['GuardianEmail'];
	$gcon = $row0['GuardianContact'];
	$id = $row0['ID'];

	if (isset($_POST['accept']) && intval($_POST['accept'])) {
		# code...
		$sql2 = "UPDATE `" . $username . "` SET Status = 'Accepted' WHERE No = " . $row0['ID'] . "";
		$result2 = $conn->query($sql2);

		$sql3 = "UPDATE warden SET Status = 'Forwarded' WHERE No = " . $user_id . "";
		$result3 = $conn->query($sql3);


		// $sql4 = "INSERT INTO warden (Student, Departure, Arival, Reason, GuardianName, GuardianRel, GuardianEmail, GuardianContact, ID, Applicant) "
		// . "VALUES ('$student', '$dept', '$arr', '$reason', '$gname', '$grel', '$gemail', '$gcon', $id, '$username')";
		// $result4 = $conn->query($sql4);

		header("location: warden.php");
	}
	if (isset($_POST['reject']) && intval($_POST['reject'])) {
		// $user_id = (int) $_POST['reject'];
		// echo $user_id;
		// echo $user;
		$sql2 = "UPDATE `" . $username . "` SET Status = 'Denied' WHERE No = " . $row0['ID'] . "";
		$result2 = $conn->query($sql2);

		$sql3 = "UPDATE warden SET Status = 'Denied' WHERE No = " . $user_id . "";
		$result3 = $conn->query($sql3);
		
		header("location: warden.php");
	}
?>