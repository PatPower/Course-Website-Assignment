<?php
include("config.php");
session_start();
unset($_SESSION['error']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

<<<<<<< HEAD
$tab = '';
=======
>>>>>>> 2c6ed1e8f12c1165ae085ac82c359512124ce006
$query = "SELECT * FROM Annon_feed";
$result = mysqli_query($conn, $query);
$tab .= '<div class="table">';
$tab .= "<div class='t_header'>";
$tab .= '<span class="Cell">Instructor</span>';
$tab .= '<span class="Cell">What do you like about the instructor teaching?</span>';
$tab .= '<span class="Cell">What do you recommend the instructor to do to improve their teaching?</span>';
$tab .= '<span class="Cell">What do you like about the labs?</span>';
$tab .= '<span class="Cell">What do you recommend the lab instructors to do to improve their lab teaching?</span>';
$tab .= '</div>';
while ($row = $result->fetch_assoc()) {
  $tab .= '<div class="Row">';
  $tab .= '<span class="Cell">'.$row['instructor'].'</span>';
  $tab .= '<span class="Cell">'.$row['q1'].'</span>';
  $tab .= '<span class="Cell">'.$row['q2'].'</span>';
  $tab .= '<span class="Cell">'.$row['q3'].'</span>';
  $tab .= '<span class="Cell">'.$row['q4'].'</span>';
  $tab .= "</div>";
}
$tab .= '</div>';
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


                <div class="block"><p>Student Feedback</p>
                  <br>
                  <div class="center"><?php echo $tab; ?></div>
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
        </div>
    </body>
</html>
