<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "feedback";

// Creating connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection has some problem: " . $conn->connect_error);
}

//echo 'hello jee'
?>
