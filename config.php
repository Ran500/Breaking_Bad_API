<?php 


$servername = "localhost";
$username = "root";
$databases = "api" ;
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password , $databases);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";



?>