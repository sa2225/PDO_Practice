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
echo "<br><hr>";



/*$sql = "SELECT id, email, fname, lname, phone, birthday, gender, password FROM `accounts` WHERE id<6";
*/

$sql = "SELECT * from accounts;";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
$row = $result->fetch_assoc();
        //echo "<br> id: ". $row["id"]. " -Email Address: ". $row["email"]. " - Name: ". $row["fname"]. " " . $row["lname"] . " -Phone: ". $row["phone"]. " -Birthday: ". $row["birthday"]. " -Gender: ". $row["gender"]. " -Password: ". $row["password"] . " <br>";
    }
} else {
    echo "0 results";
}
echo $result;

$conn->close();

?>