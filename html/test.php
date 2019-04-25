<?php
	$name = $_POST['name'];
	$regno = $_POST['regno'];
	$user = $_POST['user'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gurdianName = $_POST['gname'];
	$gurdianRel = $_POST['rel'];
	$gurdianCon = $_POST['gcontact'];
	$gurdianEmail = $_POST['gemail'];
	$block = $_POST['block'];
	$room = $_POST['roomno'];
	$pass = $_POST['pass'];
	$repass = $_POST['cnfpass'];

	echo $name;

	$servername = "localhost";
	$username = "root";
	$password = "vibhi2112";
	$dbname = "outpass";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		# code...
		die("Connection failed: " . $conn->connect_error);
	}

	if ($pass == $repass) {
		# code...
		$_SESSION['username'] = $regno;

		$sql1 = "INSERT INTO register (Name, RegNo, Username, Gender, Contact, Email, GuardianName, GuardianRelationship, GuardianContact, GuardianEmail, Block, Room, Password)"
		. "VALUES ('$name', '$regno', '$user', '$gender', '$contact', '$email', '$gurdianName', '$gurdianRel', '$gurdianCon', '$gurdianEmail', '$block', '$room', '$pass')";
		
		$sql2 = "INSERT INTO user (Username, Password, Block)"
		. "VALUES ('$user', '$pass', '$block')";

		$sql3 = "CREATE TABLE `" . $user . "` (No INT auto_increment unique not null, DepartureDate date not null, DepartureTime time not null, ArivalDate date not null, ArivalTime time not null, Reason text not null, Status VARCHAR(255) default 'Waiting', RequestTime timestamp default CURRENT_TIMESTAMP)";

		$result1 = $conn->query($sql1);
		$result2 = $conn->query($sql2);
		$result3 = $conn->query($sql3);

		if ($result1 == true && $result2 == true && $result3 == true) {
			# code...
			header("location: index.html");
		}
	}
?>