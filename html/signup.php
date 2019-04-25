<?php
	// session_start();
	// $servername = "localhost";
	// $username = "root";
	// $password = "vibhi2112";
	// $dbname = "outpass";

	// $conn = new mysqli($servername, $username, $password, $dbname);

	// if ($conn->connect_error) {
	// 	# code...
	// 	die("Connection failed: " . $conn->connect_error);
	// }

	$name = $_POST['name'];
	$regno = $_POST['regno'];
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

	echo $name . "<br/>" $regno . "<br/>" $email . "<br/>" $contact . "<br/>" $block . "<br/>";

	// if ($pass == $repass) {
	// 	# code...
	// 	$_SESSION['username'] = $regno;

	// 	$sql1 = "INSERT INTO register (Name, Regno, Gender, Contact, Email, GurdianName, GurdianRelationship, GurdianContact, GurdianEmail, Block, Room, Password)"
	// 	. "VALUES ('$name', '$regno', '$gender', '$contact', '$email', '$gurdianName' '$gurdianRel', '$gurdianCon', '$gurdianEmail', '$block','$room', '$pass')";
	// 	$sql2 = "INSERT INTO user (RegNo, password)"
	// 	. "VALUES ($regno, $pass)";

	// 	$result1 = $conn->query($sql1);
	// 	$result2 = $conn->query($sql2);

	// 	if ($result1 == true && $result2 == true) {
	// 		# code...
	// 		header("location: index.html")
	// 	}
	// }
?>