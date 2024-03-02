<?php
$servername = "localhost";
$username =  "root";
$password = "";
$db_name = "bee";

// Create a database connection
$con = mysqli_connect($servername, $username, $password, $db_name);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Rest of your code here...

?>

