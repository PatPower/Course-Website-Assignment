<?php

$servername = 'MySQL57'
$username = 'root'
$password = 'root'
$dbname = 'cscb20w18_sampso29'
$tableName = 'login'

$conn = new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error){
  die("Connection Failed")
}

$query = 'select username, password from '.$tableName.'where username =='.$_POST['User'].' and password =='.$_POST['Pass']

$result = $conn->query($query)

if (result->num_rows > 0){
  echo 'Connection Successful'
}

else {
  echo 'Incorrect Username or Password'
}


?>
