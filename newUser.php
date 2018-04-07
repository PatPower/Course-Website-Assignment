<?php
include("config.php");
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname = $_POST["NewUFname"];
  $lname = $_POST["NewULname"];
  $acctype = $_POST["AccType"];
  $uname = $_POST["NewUserN"];
  $pass = $_POST["NewUPass"];

  $query = "SELECT username FROM login WHERE  username = '$uname'";
  $result = mysqli_query($conn, $query);
  if ($result) {
      $rowcount = mysqli_num_rows($result);
      if ($rowcount > 0) {
        $_SESSION['error'] = "Username already in use!";
      } else {
          $addUser1 = "INSERT INTO login (FName, LName, username, password, accountType) VALUES ('$fname','$lname','$uname', '$pass','$acctype')";
          $addNewUser = mysqli_query($conn, $addUser1);
          $_SESSION['username'] = $uname;
          $_SESSION['name'] = $fname;
          $_SESSION['accountType'] = $acctype;
          header("Location: index.php");
      }
    }
}

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="SignIn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>New User</title>
  </head>

  <body>
    <div class="NewUserBox">
      <div class="NewUHeaderStuff">
        <div id="NewUHeader">Welcome to CSCB20!</div>
        <div id="NewUMessage">Please fill in all information below</div>
    </div>
      <form action = '' method = 'post'>
        <div class='UName'>
          <span>First Name: <input type="text" name="NewUFname" placeholder="Enter First Name As Seen On TCard"></span>
          <span>Last Name: <input type="text" name="NewULname" placeholder="Enter Last Name As Seen On TCard"></span>
        </div>

        <div class='AccType'>
          <span>Student<input type="radio" name="AccType" value="student"></span>
          <span>TA<input type="radio" name="AccType" value="TA"></span>
          <span>Instructor<input type="radio" name="AccType" value="instructor"></span>
        </br>
        </div>

        <div class="AccInfo">
          <span>Username: <input type="text" name="NewUserN" placeholder="Enter Acorn Username"></span>
          <span>Password: <input type="text" name="NewUPass" placeholder="Enter New Account Password"></span>
        </div>

        <div id="NewUSubButton"><input type="submit" value="Submit"></div>

        <div id="errMsg">
            <?php
            if (!empty($_SESSION['error'])) {
                echo '<br><div class="error">'.$_SESSION['error']."<div>";
            }
            ?>
        </div>

      </form>
  </div>

  </body>
</html>
