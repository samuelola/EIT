<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "schooleit";

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('Africa/Lagos');

?>