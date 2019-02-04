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

  $sql0 = "SELECT * FROM registration WHERE Username = '$uname'";
  $result0 = $conn->query($sql0);
  if ($result0 !== FALSE) {
    # code...
    $row0 = $result0 -> fetch_assoc();
  }
?>

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}



input[type=text] {
    width: 100%;
    padding: 8px 8px;
    margin: 8px 0;
    box-sizing: border-box;
}



.heading {
     font-size:70px;
	 background-color:  black;
	 padding:20px40px;
	 border:none;
	 color:white
	 }

.counter {
     font-size:30px;
	 
	
	 
	 padding-left:10px;
	 padding-right:10px;
	 border:none;
	 }		
	 
	 
	 #myInput {
  background-image: url('resources/asset/newse3.png');
  background-position: 2px 4px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 2px 40px;
  border: 1px solid #ddd;
  margin-bottom: 4px;
  margin-top:4px;
  border-radius: 15px/50px;
}

</style>
<body class="w3-theme-l5" style="background-image: url('resources/asset/back.jpg');">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-black w3-large ">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-home w3-margin-right"></i>Welcome, <?php echo $row0["FName"] ?></a>
  
  
    <a href="logout" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right-align" title="Logout"><i class="fa fa-power-off" ></i> Logout</a>
  
  </div>
      
    </div>
  </div>






<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         
         <hr>
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?php echo $row0["FName"]. " " . $row0["LName"]; ?></p>
		 <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i> <?php echo $row0["Email"]; ?></p>
		
		
			
			 <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $row0["Designation"]; ?></p> 
			
         <p><i class="fa fa-building fa-fw w3-margin-right w3-text-theme"></i> <?php echo $row0["Department"]; ?></p>
        </div>
      </div>
      <br>
      
   
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Manipal University Jaipur </h6>
			  
			  
			  <form method="post" action="upload.php" enctype="multipart/form-data">
					<input type="text" id="title" name="title" required placeholder="Enter Title Of Paper"><br/> 
					
					<input type="text" id="authors" name="authors" required placeholder="Enter Names of Authors"><br/> 

					
					<input type="file" id="uploadfile" name="upload">
					<br/>
					<br/>
					<button type="submit" class="w3-button w3-black"><i class="fa fa-upload"></i>  &nbsp;Upload Paper &nbsp; &nbsp;&nbsp;</button>		
					 
			  </form>		  
            </div>
          </div>
        </div>
      </div>
  
  <?php
    $sql1 = "SELECT * FROM " . $uname;

    $dir="/var/www/uploads/".$uname;

    // if ($dir_list = opendir($dir))
    // {
    //   while(($filename = readdir($dir_list)) != false)
    //   {
    //     
    //     <p><a href="<?php echo $filename;
    //     </a></p>
    //     <?php
    //   }
    //   closedir($dir_list);
    // }

    $result1 = $conn -> query($sql1);
    while ($row1 = $result1 -> fetch_assoc()) {
      # code...
      echo "<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";
      echo "<h4>" . $row1["Name"] . "</h4><br/>";
      echo "<i><b><a href= '" . $row1["Location"] . "' target='_blank'>Paper</a></b> </i>";
      echo '<hr class="w3-clear">';
      echo "<p>" . $row1["Author"] . "</p>";
      echo "</div>";
    }

  ?>    
    <!-- End Middle Column -->
    </div>
    

    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>




<footer class="w3-container w3-black">
  <p align="center">Copyright &copy; 2018,Manipal University Jaipur</p>
</footer>
 


</body>
</html> 

