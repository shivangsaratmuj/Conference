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

  $uname = $_SESSION['uname'];

  $sql = "SELECT FName,LName,Designation,Department,RegNo,Email FROM registration WHERE Username = '$uname'";
  $result = $conn->query($sql);
  if ($result !== FALSE) {
    # code...
    $row = $result -> fetch_assoc();
  }
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "login.html">Sign Out</a></h2>
      <div><?=$_SESSION['uname']?></div>
      <div>
      	<?php
      		echo "Registration Number " . $row["RegNo"]. " - Name: " . $row["FName"]. " " . $row["LName"]. "<br>";
      	?>
      </div>
   </body>
   
</html>