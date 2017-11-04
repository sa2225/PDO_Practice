<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


$servername = "sql2.njit.edu";
$username = "sa2225";
$password = "7kd94gor";
$dbname = "sa2225";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {

	echo "<b>Connected successfully</b>";
	echo "<br><hr><br>";

}

$result = $conn->query("SELECT * FROM accounts where id<6");
$numberOfResults = $result->num_rows;

$html = '<html>';
$html .= '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">';
$html .= '<link rel="stylesheet" href="styles.css">';
$html .= '<body>';
$html .= '<span>Search returned ' . $numberOfResults . ' result(s)' . '</span><br><br>';

// Checking if any results were returned
if ($numberOfResults > 0) {
    $html .= '<table><tr>';
    $html .= '<th>ID</th>';
    $html .= '<th>Email</th>';
    $html .= '<th>First Name</th>';
    $html .= '<th>Last Name</th>';
    $html .= '<th>Phone</th>';
    $html .= '<th>Birthday</th>';
    $html .= '<th>Gender</th>';
    $html .= '<th>Password</th>';
    $html .= '</tr>';
	// Generating table rows by iterating over the results 
    while($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row["id"] . '</td>';
        $html .= '<td>' . $row["email"] . '</td>';
        $html .= '<td>' . $row["fname"] . '</td>';
        $html .= '<td>' . $row["lname"] . '</td>';
        $html .= '<td>' . $row["phone"] . '</td>';
        $html .= '<td>' . $row["birthday"] . '</td>';
        $html .= '<td>' . $row["gender"] . '</td>';
        $html .= '<td>' . $row["password"] . '</td>';
        $html .= '</tr>';		
    }
    $html .= '</table>';    
}

$html .='</body>';
$html .= '</html>';

// Printing entire HTML
print_r($html);

// Closing connection 
$conn->close();
?>

