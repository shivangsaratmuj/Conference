<?php
     session_start();
     $user = $_SESSION['uname'];

     // $servername = "localhost";
     // $username = "root";
     // $password = "vibhi2112";
     // $dbname = "confrence";

     // $conn = new mysqli($servername, $username, $password, $dbname);

     // if ($conn->connect_error) {
     //      die("Connection failed: " . $conn->connect_error);
     // }

     // $sql = "Select Location from " . $user . "";
     // $result = $conn -> query($sql);
     // $row = $result -> fetch_assoc();
     // echo $row['Location'];

    $dir="/var/www/uploads/shivangsarat"; // Directory where files are stored

	if ($dir_list = opendir($dir))
	{
		while(($filename = readdir($dir_list)) != false)
		{
			// echo "<embed src = '" . $filename .  "' type='application/pdf' />"
			echo "Filename" . $filename . "<br/>";
		}
	}
	closedir($dir);
?>