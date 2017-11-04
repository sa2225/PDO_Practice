<?php
$servername = "sql2.njit.edu";
$username = "sa2225";
$password = "7kd94gor";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<b>Connected successfully</b>";
echo "<br><hr>"
?>