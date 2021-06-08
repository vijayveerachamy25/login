<?php

$email = $_GET["email"];
$pwd = $_GET["password"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT user_id, name, email,password FROM userinfo where email='".$email."' and password='".$pwd."';";

//echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "Login Success!";
  }
} else {
  echo "Login Failed!";
}
$conn->close();

?>