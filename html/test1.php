<?php
	session_start();
	$user = $_SESSION['uname'];
	$block = $_SESSION["block"];

	$servername = "localhost";
  	$username = "root";
  	$password = "vibhi2112";
  	$dbname = "outpass";
  	// Create connection
  	$conn = new mysqli($servername, $username, $password, $dbname);
  	// Check connection
  	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
  	}

  	// echo "1";
  	// echo $block;

  	$sql2 = "SELECT * FROM user WHERE Block = '$block' and Designation = 'Faculty'";

  	$result2 = $conn -> query($sql2);
  	$row = $result2 -> fetch_assoc();
  	$faculty = $row['Username'];
  	// echo $row['Username'];
  	// echo $user;

  	$departuredate = $_POST['ddate'];
  	$departuretime = $_POST['dtime'];
  	$returndate = $_POST['rdate'];
  	$returntime = $_POST['rtime'];
  	$reason = $_POST['reason'];

  	// echo $departuredate;
  	// echo $departuretime;
  	// echo $returndate;
  	// echo $returntime;
  	// echo $reason;

  	$sql3 = "SELECT * FROM register WHERE Username = '" . $user . "'";
  	$result3 = $conn -> query($sql3);
  	echo "1";

  	if ($result3 != FALSE) {
  		# code...
  		$row3 = $result3 -> fetch_assoc();
  		$student = $row3['Name'];
  		$guardianName = $row3["GuardianName"];
  		$GuardianRel = $row3["GuardianRelationship"];
  		$GuardianEmail = $row3['GuardianEmail'];
  		$GuardianContact = $row3['GuardianContact'];
  	}

  	// $sql0 = "INSERT INTO `" . $user . "` (DepartureDate, DepartureTime, ArivalDate, ArivalTime, Reason)"
  	// . "VALUES ('$departuredate', '$departuretime', '$returndate', '$returntime', '$reason')";

  	// $sql1 = "INSERT INTO `" . $faculty . "` (Student, Departure, Arival, Reason, Status, GuardianName, GuardianRel, GuardianEmail, GuardianContact)" 
  	// . "VALUES ('$student', '$departuredate', '$returndate', '$reason', '$guardianName', '$GuardianRel', '$GuardianEmail', '$GuardianContact' )";

  	// $result0 = $conn -> query($sql0);
  	// $result1 = $conn -> query($sql1);

  	// if ($result0 == TRUE && $result1 == TRUE) {
  	// 	# code...
  	// 	header("location: student.php");
  	// }
?>