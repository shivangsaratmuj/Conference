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

  	$sql0 = "SELECT * FROM wardeninfo WHERE Username = '" . $user . "'";
  	$result0 = $conn -> query($sql0);

  	if ($result0 != FALSE) {
  		# code...
  		$row0 = $result0 -> fetch_assoc();
  	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Warden Panel - MUJ Outpass</title>
	<link rel="stylesheet" type="text/css" href="warden.css">
	<!-- <script type="text/javascript">
		function alertfun() {
			// body...
			var x = document.getElementById('resp');
			if (x.style.display === "none") {
			    x.style.display = "block";
			} else {
			    x.style.display = "none";
			}
		}
		function forward() {
			// body...
			document.getElementById('status').innerHTML = "Approved";
			document.getElementById('btn').innerHTML = "";
			document.getElementById('resp').innerHTML = "";
		}
		function reject() {
			// body...
			document.getElementById('status').innerHTML = "Rejected";
			document.getElementById('btn').innerHTML = "";
			document.getElementById('resp').innerHTML = "";
		}
	</script> -->
</head>
<body>
	<div class="row">
		<div class="student">
			<b>Name:</b> <?php echo $row0["Name"] ?><br>
			<b>Email:</b> <?php echo $row0["Email"] ?><br>
			<b>Contact:</b> <?php echo $row0["Contact"] ?>
		</div>
		<div class="details">
			<b>Designation:</b> <?php echo $row0["Name"] ?><br>
			<b>Department:</b> <?php echo $row0["Name"] ?><br>
		</div>
	</div><br>
	<div id="resp" style="display: none">
		<button onclick = 'forward()'>Approve</button><br>
		<button onclick = 'reject()'>Deny</button>
	</div>
	<!-- <?php
		if ($_GET) {
			# code...
			if (isset($_GET['approve'])) {
				# code...
			} elseif (isset($_GET['reject'])) {
				# code...
			}
		}
	?> -->
	<div class="status">
		<table>
			<tr>
				<th>Date of Request</th>
				<th>Student Name</th>
			    <th>Date of Departure</th> 
			    <th>Date of Return</th>
			    <th>Reason for Leaving</th>
			    <th>Guardian's Name</th>
				<th>Guardian's Relationship</th>
				<th>Guardian's Contact</th>
				<th>Guardian's Email:</th>
			    <th>Status</th>
			    <th>Accept</th>
			    <th>Reject</th>
			</tr>
			<?php
				$sql1 = "SELECT * FROM warden" ;
				$result1 = $conn -> query($sql1);

				if ($result1 != FALSE) {
					# code...
					$num = $result1 -> num_rows;
					while ( $row1 = $result1 -> fetch_assoc()) {
						# code...
						if ($row1['Status'] == 'Waiting') {
							# code...
							echo "<tr>";
							echo "<td>" . $row1['Request'] . "</td>";
							echo "<td>" . $row1['Student'] . "</td>";
							echo "<td>" . $row1['Departure'] . "</td>";
							echo "<td>" . $row1['Arival'] . "</td>";
							echo "<td>" . $row1['Reason'] . "</td>";
							echo "<td>" . $row1['GuardianName'] . "</td>";
							echo "<td>" . $row1['GuardianRel'] . "</td>";
							echo "<td>" . $row1['GuardianContact'] . "</td>";
							echo "<td>" . $row1['GuardianEmail'] . "</td>";
							echo "<td>" . $row1['Status'] . "</td>";
							echo "<form method = 'POST' action = 'responsew.php'>";
							echo "<td id='btn1'><button type = 'submit' name = 'accept' value='{$row1['No']}'>Accept</button>";
							echo "<td id='btn2'><button type = 'submit' name = 'reject' value='{$row1['No']}'>Reject</button></td>";
							echo "</form>";
							echo "</tr>";
						} else {
							echo "<tr>";
							echo "<td>" . $row1['Request'] . "</td>";
							echo "<td>" . $row1['Student'] . "</td>";
							echo "<td>" . $row1['Departure'] . "</td>";
							echo "<td>" . $row1['Arival'] . "</td>";
							echo "<td>" . $row1['Reason'] . "</td>";
							echo "<td>" . $row1['GuardianName'] . "</td>";
							echo "<td>" . $row1['GuardianRel'] . "</td>";
							echo "<td>" . $row1['GuardianContact'] . "</td>";
							echo "<td>" . $row1['GuardianEmail'] . "</td>";
							echo "<td>" . $row1['Status'] . "</td>";
							echo "</tr>";
						}

						$num--;
					}
				}
			?>
			<!-- <tr>
			    <td>24/02/2019</td>
			    <td>Shivang Sarat</td>
			    <td>10/03/2019</td> 
			    <td>11/03/2019</td>
			    <td>Wedding at Relatives</td>
			    <td>Sudin Kumar</td>
			    <td>Father</td>
			    <td>9460525915</td>
			    <td>sudin.kumar@sbi.co.in</td>
			    <td>Approved</td>
			    <td></td>
			</tr>
			<tr>
			    <td>25/02/2019</td>
			    <td>Shivang Sarat</td>
			    <td>20/03/2019</td> 
			    <td>25/03/2019</td>
			    <td>Holi</td>
			    <td>Sudin Kumar</td>
			    <td>Father</td>
			    <td>9460525915</td>
			    <td>sudin.kumar@sbi.co.in</td>
			    <td id="status">Waiting</td>
			    <td id="btn"><button onclick="alertfun()">Respond</button></td>
			</tr>
			<tr>
			    <td>22/02/2019</td>
			    <td>Shivang Sarat</td>
			    <td>23/02/2019</td> 
			    <td>25/02/2019</td>
			    <td>Night out</td>
			    <td>Sudin Kumar</td>
			    <td>Father</td>
			    <td>9460525915</td>
			    <td>sudin.kumar@sbi.co.in</td>
			    <td>Denied</td>
			    <td></td>
			</tr> -->
		</table>
	</div>
</body>
</html>