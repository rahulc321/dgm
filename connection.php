<?php
$servername = "localhost";
$username = "root";
$password = "rahul";
$dbname = "cleaning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

define("SITEURL", "http://localhost/cleaning/");
define("IMG", "http://localhost/cleaning/assets/images/user/");


?>