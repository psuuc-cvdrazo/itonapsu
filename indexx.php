<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #alert,#register-box,#forgot-box {
            display: none;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success">
                    <strong id="result">Hello world</strong>
                </div>
            </div>
        </div>
        <!-- loginform -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="post" role="form" class="p2" id="login-form">
                    <div class="form-group">
                        <input type="text" name="studentid" class="form-control" placeholder="Student ID" required minlength="3">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required minlength="6">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                        <label for="customCheck" class="custom-control-label">Remember Me</label>
                        <a href="#" id="forgot-btn" class="float-end" >Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" value="Login" class="btn btn-primary col-12">
                    </div>
                    <div class="form-group">
                        <p class="text">
                            Not registered? <a href="#" id="register-btn">Register Here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- registration form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" role="form" class="p2" id="register-form">
                    <div class="form-group">
                        <input type="text" name="studentid" class="form-control" placeholder="Student ID" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mname" class="form-control" placeholder="Middle Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" id="contact"  class="form-control" placeholder="Contact Number" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="address" name="address" class="form-control" placeholder="Complete Address" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required minlength="6">
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpass" id="cpass"  class="form-control" placeholder="Confirm Password" required minlength="6">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="rem" class="custom-control-input" id="customCheck2">
                        <label for="customCheck2" class="custom-control-label">I Agree to the <a href="#">terms & conditions</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" id="register" value="Register" class="btn btn-primary col-12">
                    </div>
                    <div class="form-group">
                        <p class="text">
                            Already registered?<a href="#" id="login-btn">Login Here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <!-- forgot password -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="" method="post" role="form" class="p2" id="forgot-form">
                    <div class="form-group">
                        <small class="text-muted">
                            To reset your password, enter the email address and we will send reset password in instructions on your email.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary col-12">
                    </div>
                    
                    <div class="form-group">
                        <p class="text">
                            Not registered? <a href="#" id="back-btn">Back</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
        $("#forgot-btn").click(function(){
            $("#login-box").hide();
            $("#forgot-box").show();
            
        });
        $("#back-btn").click(function(){
            $("#login-box").show();
            $("#forgot-box").hide();
            
        });
        $("#login-btn").click(function(){
            $("#login-box").show();
            $("#register-box").hide();
            
        });
        $("#register-btn").click(function(){
            $("#login-box").hide();
            $("#register-box").show();
        });

        $("#login-form").validate();
        $("#register-form").validate({
            rules:{
                cpass:{
                    equalTo: "#pass"
                },
                contact:{
                    digits:true,
                }
            }
        });
        $("#forgot-form").validate();

        $("#register").click(function(e){
            if(document.getElementById('register-form').checkValidity()){
                e.preventDefault();
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data:$("#register-form").serialize()+'&action=register',
                    success: function(response){
                        $("#alert").show();
                        $("#result").html(response);

                    }
                });
            }
            return true;
        });
    });


</script>
</body>
</html>