<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <link rel="stylesheet" type="text/css" href="signupstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="signup.php" class="sign-in-form" method="POST">
          <div class="backhome">
            <ul>
              <li><a href="index.php">Back to Home</a></li>
            </ul>
          </div>
          <h2 class="title"> Sign in </h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="studentid" placeholder="Student ID" required minlength="3">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
          </div>
          <input type="submit" value="Login" class="btn solid">


        </form>

        <form action="reg.php" class="sign-up-form" method="POST">
          <h2 class="signup-title"> Sign up </h2>

          <div class="signup-input">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="FirstName">
          </div>
          <div class="signup-input">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="LastName">
          </div>
          <div class="signup-input">
            <i class="fas fa-id-card"></i>
            <input type="text" placeholder="Student ID" name="Studentid">
          </div>
          <div class="signup-input">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" name="Email">
          </div>
          <div class="signup-input">
            <i class="fas fa-phone"></i>
            <input type="tel" placeholder="Contact Number" name="Contact">
          </div>
          <div class="signup-input">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" placeholder="Full Address" name="Address">
          </div>
          <div class="signup-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
          </div>
          <div class="signup-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="CPassword">
          </div>

          <input type="hidden" id="Status" name="Status">
          <script type="text/javascript">
            document.getElementById("Status").setAttribute('value', 'Active');
          </script>

          <input type="submit" value="Sign up" class="btn solid" name="signup">


        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">

          <h3> New here? </h3>
          <p> Create an account and request your documents now.</p>
          <button class="btn transparent" id="sign-up-btn"> Sign up </button><br>
        </div>
        <img src="img/log.svg" class="image">
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3> One of us? </h3>
          <p> Login your account and request your documents now.</p>
          <button class="btn transparent" id="sign-in-btn"> Sign in </button>
        </div>
        <img src="img/register.svg" class="image">
      </div>
    </div>
  </div>

  <script src="app.js"></script>

</body>

</html>