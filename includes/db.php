<?php
$servername = "db4free.net";
$username = "affiliateadmin";
$password = "Dojjie#112022";
$dbname = "affiliatesite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
