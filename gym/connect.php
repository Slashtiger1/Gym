<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected";
}
//echo "Connected successfully";
// $name = $_POST['name'];
// $gender = $_POST['gender'];
// $age = $_POST['age'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];




?>