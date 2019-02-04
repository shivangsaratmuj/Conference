<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<style>


* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.button {
    background-color:black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button:hover {
background-color:gray;}
	 

	 
</style>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage">


<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Schedule</a>
  <a href="#" class="w3-bar-item w3-button">Team</a>
  <a href="#" class="w3-bar-item w3-button">Contact Us</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
     <a href="./home.html" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="./aboutmuj.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About MUJ</a>
    
    <a href="./schedule.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Schedule</a>
    <a href="./team_info.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Team</a>
	<a href="./Registration.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registration</a>
	 <a href="./login.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white align-right">Sign In</a>
	    <a href="./contactus.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>

		
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<br/>
<br/>
<br/>

<h1 style="background: rgba(237, 92, 9, 1.0);" class="w3-text-white"> <center>Sign Up : Registration </center></h1> 




<div class="container">
  <form action="/Registration.php" method="post">

  	<div class="alert alert-error"><?= $_SESSION['message'] ?></div>
  
  
  
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="lname">Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="username" placeholder="Enter a username">
    </div>
  </div>
  <!-- crosscheck with database to see if it already existes -->
  
  <!-- username and resgistration number will act as COMPOSIT KEY for identifying a user -->
  
  
    <div class="row">
    <div class="col-25">
      <label for="regno">Registration Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="regno" name="regno" placeholder="Your reg. number..">
    </div>
  </div>
  
  
    <div class="row">
    <div class="col-25">
      <label for="desig">Designation</label>
    </div>
    <div class="col-75">
      <input type="text" id="desig" name="desig" placeholder="Your designation..">
    </div>
  </div>
  
    <div class="row">
    <div class="col-25">
      <label for="department">Branch/Department</label>
    </div>
    <div class="col-75">
      <input type="text" id="department" name="department" placeholder="Your department..">
    </div>
  </div>
  
    <div class="row">
    <div class="col-25">
      <label for="address">Mailing Address</label>
    </div>
    <div class="col-75">
      <input type="text" id="address" name="address" placeholder="Your address..">
    </div>
  </div>
  
  
    <div class="row">
    <div class="col-25">
      <label for="contact">Contact No.</label>
    </div>
    <div class="col-75">
      <input type="text" id="contact" name="contact" placeholder="Your contact..">
    </div>
  </div>
  
  
    <div class="row">
    <div class="col-25">
      <label for="mail">E-mail</label>
    </div>
    <div class="col-75">
      <input type="email" id="mail" name="mail" placeholder="Your email..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="pass">Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Your password..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="repass">Re-Password</label>
    </div>
    <div class="col-75">
      <input type="password" id="repass" name="repass" placeholder="Re-Enter your password">
    </div>
  </div><br/>
 
  <center>
  <div class="row">
    <!-- <button class="button" id="signup"> <a  style="text-decoration:none;">Sign Up</a></button> -->
    <input type="submit" name="submit" value="Sign Up">

  </div>
  </center>
  
  </form>
</div>

<br/>
<br/>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

<?php
  session_start();
  $_SESSION['message'] = '';

  $servername = "localhost";
  $username = "root";
  $password = "vibhi2112";
  $dbname = "confrence";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    // Two passwords are equal to each other

    if ($_POST['pass'] == $_POST['repass']) {
      # code...
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $uname = $_POST['username'];
      $regno = $_POST['regno'];
      $desig = $_POST['desig'];
      $dept = $_POST['department'];
      $addr = $_POST['address'];
      $contact = $_POST['contact'];
      $email = $_POST['mail'];
      $pass = $_POST['pass'];


      $_SESSION['Username'] = $uname;
      $_SESSION['RegistrationNumber'] = $regno;

      $sql = "INSERT INTO registration (RegNo, FName, LName, Username, Designation, Department, Address, Contact, Email, Password) "
      . "VALUES ($regno,'$fname','$lname', '$uname', '$desig', '$dept', '$addr', '$contact', '$email', '$pass')";

      if ($conn->query($sql) === true) {
        # code...
        $_SESSION['message'] = "Registration Sucessfull. Added $username to database";
        
        $sql1 = "CREATE TABLE " . $uname . " (No INT auto_increment, Name MEDIUMTEXT, Author MEDIUMTEXT, Location MEDIUMTEXT, PRIMARY KEY(No))";
        $result = $conn->query($sql1);
        
        header("location: login.html");
      }
      else{
        $_SESSION['message'] = "User could not be added to the database";
      }
    }
    else{
      $_SESSION['message'] = "Two passwords do not match";
    }
  }
  $conn->close();
?>