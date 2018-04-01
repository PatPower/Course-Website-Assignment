<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'database');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$myusername = mysqli_real_escape_string($db,$_POST['User']);
$mypassword = mysqli_real_escape_string($db,$_POST['Pass']); 

$query = "SELECT username,password FROM login WHERE username = '$myusername' and password = '$mypassword'";
$result = $db->query($query);
$rowcount=mysqli_num_rows($result);

if ($rowcount > 0) {
  echo 'Connection Successful';
} else {
  echo $query.'<br>';
  echo 'Incorrect Username or Password';
}
?>
