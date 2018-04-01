
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
      <form action="authentic.php" method = 'post'>
        <div>Username <input type="text" name="User" placeholder="Enter UTor Username"></div>
        <br>
        <div>Password <input type="text" name="Pass" placeholder="Enter UTor Password"></div>
        <br>
        <div class = "LogInButtons">
          <input type="submit" Value="Submit">
          <a href="#">New User</a> <br>
      </div>
      </form>
    </div>

  </body>

</html>
