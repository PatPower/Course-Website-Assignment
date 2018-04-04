<?php
include("config.php");
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            header("Location: indexMain.php");
        }
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="markPage.css">
        <script type="text/javascript" src="index.js" ></script>
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <title>Marks</title>
    </head>

    <body>
        <div id="navBar" class="nav">
            <a id="barTitle" href="index.php">CSCB20 Course Website</a>
            <a id="empty" href="index.php"></a>
            <a href="index.php#contact">Contact</a>
            <a href="index.php#labs">Labs</a>
            <a href="index.php#assignments">Assignments</a>
            <a href="index.php#lecs">Lectures</a>
            <a href="index.php#links">Course Resources</a>
            <a href="index.php#anouncments">Anouncments</a>
            <a href="index.php#course">Course Info</a>
            <a href="index.php#home">Home</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navFunct()">&#9776;</a>
        </div>
        <div class="page">
            <div class="pageTitle">Marks</div>
            <br>
            <div class="panel">
                <?php
                echo '<br><div class="centerInfo">Welcome ' . $_SESSION['name'] . '!';
                echo '<br>User Name: ' . $_SESSION['username'] . '';
                echo '<br>Account Type: ' . $_SESSION['accountType'] . '</div>';
                ?>
                <br>
                <div class="block"><p>Add Mark</p>
                    <?php
                        $query = "SELECT username FROM login";
                        $result = mysqli_query($conn, $query);
                        echo "<select>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option name='student' value=".$row["username"].">".$row["username"]."</option>";
                        }
                        echo "</select>";
                    ?>
                    <?php
                        echo "<select>";
                        for ($x = 0; $x < 5; $x++) {
                            echo "<option>".$x."</option>";
                        }
                        echo "</select>";
                    ?>
                </div>
                <div class="block"><p>Update Mark</p>
                    <?php
                        $query = "SELECT username FROM login";
                        $result = mysqli_query($conn, $query);
                        echo "<select>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option>".$row["username"]."</option>";
                        }
                        echo "</select>";
                    ?>
                </div>
                    
                <div class="block"><p>Add Course Work</p></div>
                <div class="block"><p>Search for Students Work</p></div>
            </div>
            <footer>
                <div class="left">
                    <br>
                    <br>
                    <h2>CSCB20</h2>
                    <h2>Course Website</h2>
                </div>
                <div class="vline"></div>
                <div class="vline"></div>
                <div class="middle">
                    <p> Navigation</p>
                    <a onclick="smoothScroll('course')">Course Info</a><br>
                    <a onclick="smoothScroll('anouncments')">Anouncments</a><br>
                    <a onclick="smoothScroll('links')">Course Resources</a><br>
                    <a onclick="smoothScroll('lecs')">Lectures</a><br>
                    <a onclick="smoothScroll('assignments')">Assignments</a><br>
                    <a onclick="smoothScroll('labs')">Labs</a><br>
                    <a onclick="smoothScroll('contact')">Contact</a><br>
                </div>
                <div class="middle">
                    <p class="bold"> Course Resources</p class="bold">
                    <a href="#Syllabus">Syllabus</a><br>
                    <a href='https://code.tutsplus.com/articles/sql-for-beginners--net-8200'>MySQL Tutorial (Online)</a><br>
                    <a href='https://www.piazza.com'>Piazza</a><br>
                    <a href='https://markus.utsc.utoronto.ca/cscb20w18/?locale=en'>Markus</a><br>
                    <a href='http://www.utsc.utoronto.ca/iits/computer-labs'>UTSC Labs</a><br>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0_2lybZw9Zwlm3fKtkMDegHrP0dSbH_LUAMaMnx5vhko6Yg/viewform">Anonymous Feedback</a><br>
                    <a href="http://www.utsc.utoronto.ca/cms/faculty-of-computer-science">UTSC Computer Science Faculty</a><br>
                </div>
                <br>
                <div class="vline"></div>
                <div class="vline"></div>
                <div class="right">
                    <p> Created by </p>
                    <h2> Patent </h2>
                    <h2> & </h2>
                    <h2> Dwight </h2>
                </div>
            </footer>
        </div>
    </body>
</html>
