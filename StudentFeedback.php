<?php
include("config.php");
session_start();
unset($_SESSION['error']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $InUName = $_POST['SEL_instructor'];
    $an1 = $_POST['Question1'];
    $an2 = $_POST['Question2'];
    $an3 = $_POST['Question3'];
    $an4 = $_POST['Question4'];

    if ((isset($_POST['Question4'])) and ( isset($_POST['Question3'])) and ( isset($_POST['Question2'])) and ( isset($_POST['Question1'])) and ( isset($_POST['SEL_instructor']))) {
        $addFeed1 = "INSERT INTO Annon_feed VALUES ('$an1','$an2','$an3','$an4','$InUName')";
        $addFeed = mysqli_query($conn, $addFeed1);
        $_SESSION['error'] = "Submission Successful!";
    } else {
        $_SESSION['error'] = "Not all questions are answered!";
    }
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="markPage.css">
        <script type="text/javascript" src="index.js" ></script>
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <title>Anonymous Feedback</title>
    </head>

    <body>
        <div id="navBar" class="nav">
            <a id="barTitle" href="index.php">CSCB20 Course Website</a>
            <a id="empty" href="index.php"></a>
            <a href="logout.php" name='logout' value='out'>Logout</a>
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
            <div class="pageTitle">Anonymous Feedback</div>
            <br>
            <div class="panel">
                <?php
                echo '<br><div class="centerInfo">Welcome ' . $_SESSION['name'] . '!';
                echo '<br>User Name: ' . $_SESSION['username'] . '';
                echo '<br>Account Type: ' . $_SESSION['accountType'] . '</div>';
                ?>
                <br>


                <form action="" method="post" class="center">
                    <div> Instructor:
                        <?php
                        $query = "SELECT username, FName, LName FROM login WHERE accountType='instructor'";
                        $result = mysqli_query($conn, $query);
                        echo "<select name='SEL_instructor'>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value=" . $row["username"] . ">" . $row["FName"] . ' ' . $row["LName"] . "</option>";
                        }
                        echo "</select>";
                        ?>
                    </div>
                    <div class="block"><p>What do you like about the instructor teaching?</p>
                        <br>
                        <div><input type="text" name="Question1"></div>
                    </div>

                    <div class="block"><p>What do you recommend the instructor to do to improve their teaching?</p>
                        <br>
                        <div><input type="text" name="Question2"></div>
                    </div>

                    <div class="block"><p>What do you like about the labs?</p>
                        <br>
                        <div><input type="text" name="Question3"></div>
                    </div>

                    <div class="block"><p>What do you recommend the lab instructors to do to improve their lab teaching?</p>
                        <br>
                        <div><input type="text" name="Question4"></div>
                    </div>

                    <br>
                    <input type="submit" value="Submit">
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo '<br><div class="error">' . $_SESSION['error'] . "<div>";
                    }
                    ?>
                </form>




            </div>
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
    </body>
</html>
