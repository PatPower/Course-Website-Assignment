<?php
include("config.php");
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['AddMarkSub'])) {
    // submit add marks form
    $student = $_POST['studentAM'];
    $courseWork = $_POST['CWorkAM'];
    $mark = $_POST['AddMarks'];

    $query = "SELECT username, coursework, mark FROM marks WHERE username='$_SESSION['username']' and coursework='$courseWork'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
          $_SESSION['error'] = "There is already a mark here!";
        } else {
            $addMark1 = "INSERT INTO marks (username, coursework, mark) VALUES ('$student','$courseWork','$mark')";
            $addMark = mysqli_query($conn, $addMark1);
            $_SESSION['error'] = "Mark has been added!";
        }
      }
  }
  if (isset($_POST['UpMarkSub'])) {
    // submit Update Marks form
    $student = $_POST['studentUM'];
    $courseWork = $_POST['CWorkUM'];
    $mark = $_POST['UpMarks'];

    $query = "SELECT * FROM marks WHERE username= '$_SESSION['username']' and coursework='$courseWork'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
          $UpMark1 = "UPDATE marks SET mark=$mark where username = '$_SESSION['username']' and coursework='$courseWork'";
          $UpMark = mysqli_query($conn, $UpMark1);
          $_SESSION['error1'] = "Mark has been Updated!";
        } else {
          $_SESSION['error1'] = "No Mark exists!";
        }
      }
  }
  if (isset($_POST['AddCSub'])) {
    // submit Add New Course work form
    $assignment = $_POST['NewAss'];

    $query = "SELECT * FROM coursework WHERE name='$assignment'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
          $_SESSION['error2'] = "This Coursework already exists!";
        } else {
          $addCW = "INSERT INTO coursework VALUES ('$assignment')";
          $_SESSION['error2'] = "New coursework has been added!";
        }
      }
  }
  if (isset($_POST['SearchStudSub'])) {
    // submit Search Students form
    $student = $_POST['SearchStud'];

    $query = "SELECT * FROM marks WHERE username='$student'";
    $result = mysqli_query($conn, $query);
<<<<<<< HEAD
    if ($result) {
        $rowcount = mysqli_num_rows($result);
        if ($rowcount > 0) {
          echo '<div class="table">';
          echo "<div class='t_header'>";
          echo '<span class="Cell">Coursework</span>';
          echo '<span class="Cell">Mark</span>';
          echo '</div>';
          while ($row = $result->fetch_assoc()) {
            echo '<div class="Row">';
            echo '<span class="Cell">'.$row['coursework'].'</span>';
            echo '<span class="Cell">'.$row['mark'].'</span>';
            echo "</div>";
          }
          echo '</div>';
      }
      else {
        $_SESSION['error3'] = "Student has no marks!";
      }
=======
    echo '<div class="table">';
    echo "<div class="TableHeader">";
    echo '<span class="Cell">Coursework</span>';
    echo '<span class="Cell">Mark</span>';
    echo '</div>';
    while ($row = $result->fetch_assoc()) {
      echo '<div class="Row">';
      echo '<span class="Cell">'.$row['coursework'].'</span>';
      echo '<span class="Cell">'.$row['mark'].'</span>';
      echo "</div>";
>>>>>>> parent of fbad169... Working Instructors Mark Page: Untested
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
                  <form action="" method="post">
                  <!--student dropdown-->
                    <span> Student:
                    <?php
                        $query = "SELECT username FROM login WHERE accountType='student'";
                        $result = mysqli_query($conn, $query);
                        echo "<select>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option name='studentAM' value=".$row["username"].">".$row["username"]."</option>";
                        }
                        echo "</select>";
                    ?>
                  </span>
                  <!--course work dropdown-->
                  <span> Course Work:
                    <?php
                    $query = "SELECT name FROM coursework";
                    $result = mysqli_query($conn, $query);
                    echo "<select>";
                    while ($row = $result->fetch_assoc()) {
                            echo "<option name='CWorkAM' value=".$row["name"].">".$row["name"]."</option>"
                        }
                        echo "</select>";
                    ?>
                  </span>
                  <!--enter user mark-->
                  <span>Mark:<input type="number" name="AddMarks" min="0" max="100" placeholder="PERCENTAGE MARK"></span>
                  <span><input type="submit" Value="Submit" name ='AddMarkSub'></span>
                  <?php
                  if (!empty($_SESSION['error'])) {
                      echo '<br><div class="error">'.$_SESSION['error']."<div>";
                  }
                  ?>
                </form>

                </div>




                <div class="block"><p>Update Mark</p>
                  <form action="" method="post">
                  <!--student dropdown-->
                  <span> Student:
                  <?php
                      $query = "SELECT username FROM login WHERE accountType='student'";
                      $result = mysqli_query($conn, $query);
                      echo "<select>";
                      while ($row = $result->fetch_assoc()) {
                          echo "<option name='studentUM' value=".$row["username"].">".$row["username"]."</option>";
                      }
                      echo "</select>";
                  ?>
                </span>
                <!--course work dropdown-->
                <span> Course Work:
                  <?php
                  $query = "SELECT name FROM coursework";
                  $result = mysqli_query($conn, $query);
                  echo "<select>";
                  while ($row = $result->fetch_assoc()) {
                          echo "<option name='CWorkUM' value=".$row["name"].">".$row["name"]."</option>"
                      }
                      echo "</select>";
                  ?>
                </span>
                    <!--enter user mark-->
                    <span>Mark:<input type="number" name="UpMarks" min="0" max="100" placeholder="PERCENTAGE MARK"></span>
                    <span><input type="submit" Value="Submit" name="UpMarkSub"></span>

                    <?php
                    if (!empty($_SESSION['error1'])) {
                        echo '<br><div class="error">'.$_SESSION['error1']."<div>";
                    }
                    ?>
                  </form>
                </div>





                <div class="block"><p>Add Course Work</p>
                  <form action="" method="post">
                  <span>Assignment Name:<input type="text" name="NewAss"></span>
                  <span><input type="submit" Value="Submit" name="AddCSub"></span>
                  <?php
                  if (!empty($_SESSION['error2'])) {
                      echo '<br><div class="error">'.$_SESSION['error2']."<div>";
                  }
                  ?>
                </form>
                </div>





                <div class="block"><p>Search for Students Work</p>
                  <!--student dropdown-->
                    <span> Student
                    <?php
                        $query = "SELECT username FROM login WHERE accountType='student'";
                        $result = mysqli_query($conn, $query);
                        echo "<select>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<option name='SearchStud' value=".$row["username"].">".$row["username"]."</option>";
                        }
                        echo "</select>";
                    ?>
                    <span><form action="" method="post"><input type="submit" Value="Submit" name="SearchStudSub"></form></span>
                  </span>
                  <?php
                  if (!empty($_SESSION['error3'])) {
                      echo '<br><div class="error">'.$_SESSION['error3']."<div>";
                  }
                  ?>
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
