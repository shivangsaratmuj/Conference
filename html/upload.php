<?php
     session_start();
     $user = $_SESSION['uname'];

     $title = $_POST['title'];
     $authors = $_POST['authors'];
     // echo $title. "<br>";
     // echo $authors. "<br>" ;

     // echo $user;

     $errors= array();
     $file_name = $_FILES['upload']['name'];
     $file_size =$_FILES['upload']['size'];
     $file_tmp =$_FILES['upload']['tmp_name'];
     $file_type=$_FILES['upload']['type'];
     $file_ext=strtolower(end(explode('.',$_FILES['upload']['name'])));

     // echo $file_name."<br>".$file_size."<br>" .$file_type."<br>".$file_tmp;

     $extensions= array("docx","pdf","txt", "doc");

     $name = basename($_FILES["upload"]["name"]);

     $directory = "/var/www/uploads/" . $user;

     $location = $directory . "/" . $name;

     if (!file_exists($directory)) {
          # code...
          mkdir($directory, 0777, true);
     }

     move_uploaded_file($file_tmp,$location);

     $servername = "localhost";
     $username = "root";
     $password = "vibhi2112";
     $dbname = "confrence";

     $conn = new mysqli($servername, $username, $password, $dbname);

     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     }

     $sql = "INSERT INTO " . $user . "(Name, Author, Location) VALUES ('" . $title . "','" . $authors . "','" . $location . "')";
     $result = $conn -> query($sql);

     if ($result !== FALSE) {
          # code...
          header("location: test0.php");
     }
?>