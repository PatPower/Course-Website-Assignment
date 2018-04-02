<html>
  <head>
    <link rel="stylesheet" type="text/css" href="SignIn.css">
    <title>New User</title>
  </head>

  <body>
    <div class="NewUserBox">
      <form action = '' method = 'post'>
        <div class='UName'>
          First Name: <input type="text" name="NewUFname" placeholder="Enter First Name As Seen On TCard">
          Last Name: <input type="text" name="NewULname" placeholder="Enter Last Name As Seen On TCard">
        </div>

        <div class='AccType'>
          <span><input type="radio" name="AccType" value="Student"></span>
          <span><input type="radio" name="AccType" value="TA"></span>
          <span><input type="radio" name="AccType" value="Instructor"></span>
        </br>
        </div>

        <div class="AccInfo">
          Username: <input type="text" name="NewUserN" value="Enter Acorn Username">
          Password: <input type="text" name="NewUPass" value="Enter New Account Password">
        </div>
      </form>
  </div>

  </body>
</html>
