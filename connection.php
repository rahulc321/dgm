<?php
$servername = "localhost";
$username = "root";
$password = "rahul";
$dbname = "delhi_gram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

define("SITEURL", "http://localhost/newspaper/");
define("IMG", "http://localhost/newspaper/admin/news/");


?>