<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cscb20w18_sampso29";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$myusername = mysqli_real_escape_string($conn, $_POST['User']);
$mypassword = mysqli_real_escape_string($conn, $_POST['Pass']);

$query = "SELECT username FROM login WHERE  username = '$myusername' and password = '$mypassword'";
$result = mysqli_query($conn, $query);
if ($result) {
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0) {
        echo 'Connection Successful';
    } else {
        echo 'Incorrect Username or Password';
    }
} else {
    
    echo 'Error parsing the query<br>';
    echo $query . '<br>';
    echo $myusername . '<br>';
    echo $mypassword . '<br>';
}
?>
