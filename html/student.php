<?php
	session_start();
	$user = $_SESSION['uname'];

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

  	$sql0 = "SELECT * FROM register WHERE Username = '" . $user . "'";
  	$result0 = $conn -> query($sql0);

  	if ($result0 != FALSE) {
  		# code...
  		$row0 = $result0 -> fetch_assoc();
  		$_SESSION["block"] = $row0["Block"];
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Panel - MUJ Outpass</title>
	<link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>
	<div class="row">
		<div class="student">
			<b>Name:</b> <?php echo $row0["Name"] ?><br>
			<b>Registration Number:</b> <?php echo $row0["RegNo"] ?><br>
			<b>Block:</b> <?php echo $row0["Block"] ?><br>
			<b>Room Number:</b> <?php echo $row0["Room"] ?><br>
			<b>Email:</b> <?php echo $row0["Email"] ?><br>
			<b>Contact:</b> <?php echo $row0["Contact"] ?>
		</div>
		<div class="details">
			<b>Designation:</b> <?php echo $row0["Status"] ?><br>
			<b>Guardian's Name:</b> <?php echo $row0["GuardianName"] ?><br>
			<b>Guardian's Relationship:</b> <?php echo $row0["GuardianRelationship"] ?><br>
			<b>Guardian's Contact:</b> <?php echo $row0["GuardianContact"] ?><br>
			<b>Guardian's Email:</b> <?php echo $row0["GuardianEmail"] ?><br>
		</div>
	</div><br>
	<div class="request">
		<h1>New Request</h1>
		<form method="POST" action="request.php">
			Date of Departure: <input type="date" name="ddate"><br>
			Time of Departure: <input type="time" name="dtime"><br>
			<script type="text/javascript">
				var today = new Date().toISOString().split('T')[0];
				document.getElementsByName('ddate')[0].setAttribute('min', today);
			</script>
			Date of Return: <input type="date" name="rdate"><br>
			<script type="text/javascript">
				var arivald = new Date().toISOString().split('T')[0];
				document.getElementsByName('rdate')[0].setAttribute('min', arivald);
			</script>
			Time of Return: <input type="time" name="rtime"><br>
			Reason for Leaving: <input type="text" name="reason"><br><br>
			<input type="submit" name="submit" value="Request">
		</form>
	</div><br>
	<div class="status">
		<table>
			<tr>
				<th>Date of Request</th>
			    <th>Date of Departure</th> 
			    <th>Date of Return</th>
			    <th>Reason for Leaving</th>
			    <th>Status</th>
			</tr>
			
			<?php 
				$sql1 = "SELECT * FROM `" . $user . "`" ;
				$result1 = $conn -> query($sql1);

				if ($result1 != FALSE) {
					# code...
					$num = $result1 -> num_rows;
					while ( $row1 = $result1 -> fetch_assoc()) {
						# code...
						echo "<tr>";
						echo "<td>" . $row1['RequestTime'] . "</td>";
						echo "<td>" . $row1['DepartureDate'] . " " . $row1['DepartureTime'] . "</td>";
						echo "<td>" . $row1['ArivalDate'] . " " . $row1['ArivalTime'] . "</td>";
						echo "<td>" . $row1['Reason'] . "</td>";
						echo "<td>" . $row1['Status'] . "</td>";
						echo "</tr>";

						$num--;
					}
				}
			?>

			<!-- <tr>
			    <td>24/02/2019</td>
			    <td>10/03/2019</td> 
			    <td>11/03/2019</td>
			    <td>Wedding at Relatives</td>
			    <td>Approved</td>
			</tr>
			<tr>
			    <td>25/02/2019</td>
			    <td>20/03/2019</td> 
			    <td>25/03/2019</td>
			    <td>Holi</td>
			    <td>Waiting</td>
			</tr>
			<tr>
			    <td>22/02/2019</td>
			    <td>23/02/2019</td> 
			    <td>25/02/2019</td>
			    <td>Night out</td>
			    <td>Denied</td>
			</tr> -->
		</table>
	</div>
</body>
</html>