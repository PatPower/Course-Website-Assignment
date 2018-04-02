<?php
include("config.php");
session_start();


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($conn, $_POST['User']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['Pass']);

    $query = "SELECT username FROM login WHERE  username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
            header("Location: website\index.html");
        } else {
            $_SESSION['error'] = "Incorrect username or password";
        }
    } else {

        echo 'Error parsing the query<br>';
        echo $query . '<br>';
        echo $myusername . '<br>';
        echo $mypassword . '<br>';
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="SignIn.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <title> CSCB20 SignIn </title>
    </head>

    <body>
        <!--Course Title-->
        <div class="webpageInfo">
            <div id="CourseCode"><p>CSCB20</p></div>
            <div id="CourseName">Introduction to Databases and Web Applications | Winter 2018</div>
        </div>
        <br>

        <!--SignIn box for signing in-->
        <div class = 'SignInBox'>
            <div id="FormName"><p>Login</p></div>
            <form action="" method = 'post'>
                
                <div>Username <input type="text" name="User" value="<?php if (isset($_POST['User'])) echo $_POST['User']; ?>"></div>
                <br>
                <div>Password <input type="text" name="Pass"></div>
                <br>
                <div class = "LogInButtons">
                    <input type="submit" Value="Submit">
                    <a href="#">New User</a> <br>
                </div>
                <div id="errMsg">
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo '<br><div class="error">'.$_SESSION['error']."<div>";
                    }
                    ?>
                </div>
                <?php unset($_SESSION['error']); ?>
            </form>
        </div>

    </body>

</html>
