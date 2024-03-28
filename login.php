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
        <form action="" class="sign-in-form">
          <div class="backhome">
            <ul>
              <li><a href="index.php">Back to Home</a></li>
            </ul>
          </div>
          <h2 class="title"> Sign in </h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="studentid" id='studentid' placeholder="Student ID" required minlength="3">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id='password' name="Password">
          </div>

          <button class="btn solid" id="login" type="button">LOGIN</button>


        </form>

        <form action="reg.php" class="sign-up-form" method="POST" id="sign-up-form">
          <h2 class="signup-title"> Sign up </h2>

          <div class="signup-input">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="FirstName" id="FirstName">
          </div>
          <div class="signup-input">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="LastName" id="LastName">
          </div>
          <div class="signup-input">
            <i class="fas fa-id-card"></i>
            <input type="text" placeholder="Student ID" name="Studentid" id="Studentid">
          </div>
          <div class="signup-input">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" name="Email" id="Email">
          </div>
          <div class="signup-input">
            <i class="fas fa-phone"></i>
            <input type="tel" placeholder="Contact Number" name="Contact" id="Contact">
          </div>
          <div class="signup-input">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" placeholder="Full Address" name="Address" id="Address">
          </div>
          <div class="signup-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" id="Password">
          </div>
          <div class="signup-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="CPassword" id="CPassword">
          </div>

          <input type="hidden" id="Status" name="Status">
          <script type="text/javascript">
            document.getElementById("Status").setAttribute('value', 'Active');
          </script>
          <button class="btn solid" name="signup" id="signup" type="button">SIGN UP</button>



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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(function() {

      $('#login').click(function() {
        login();
      });

      function login() {
        var studentid = $('#studentid').val();
        var password = $('#password').val();
        $.ajax({

          url: 'signup.php',
          method: 'post',
          data: {
            studentid: studentid,
            password: password,
          },
          dataType: 'json',

          success: function(response) {
            Swal.fire({
              title: response.title,
              icon: response.icon,
            });
            if (response.title == 'Welcome user') {
              setTimeout(function() {
                window.location.href = 'userportal.php';
              }, 1500);
            }

          }

        });
      }
      // $("#sign-up-form").validate();

      $('#signup').click(function() {
        signup();
      });

      function signup() {

        var firstname = $('#FirstName').val();
        var lastname = $('#LastName').val();
        var studentid = $('#Studentid').val();
        var email = $('#Email').val();
        var contact = $('#Contact').val();
        var address = $('#Address').val();
        var password = $('#Password').val();
        var cpassword = $('#CPassword').val();
        var status = $('#Status').val();
        $.ajax({
          url: 'reg.php',
          method: 'post',
          data: {
            FirstName: firstname,
            LastName: lastname,
            Studentid: studentid,
            Email: email,
            Contact: contact,
            Address: address,
            Password: password,
            CPassword: cpassword,
            Status: status,
          },
          dataType: 'json',

          success: function(response) {
            Swal.fire({
              title: response.title,
              icon: response.icon,
            });
            if (response.title == 'Successfully Registered!') {
              sign_in_btn.click();

            }
          }

        });
      }

    });
  </script>
  <script src="app.js"></script>

</body>

</html>