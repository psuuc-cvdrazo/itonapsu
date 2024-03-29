<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <link rel="stylesheet" href="request.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-MjiSwijB1v7UMpFM8bzCjUsbZtOcVrGrxeHC9j49UrEHggpU4xGHNpIf+JMt86BfNN1lEO8N3yqk0vp5G21K9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
include 'connect.php';

session_start();
$studentid = $_SESSION['login_user'];
$stmt = "SELECT FirstName, MiddleName, LastName, Studentid, Contact, Email, Address FROM user WHERE Studentid = ?";
$result = $conn->prepare($stmt);
$result->bind_param("s", $studentid);
$result->execute();
$result = $result->get_result();

if ($result->num_rows == 1) {
  $data = $result->fetch_assoc();



?>

  <body>
    <div class="container">
      <div class="card">
        <div style="background-image: linear-gradient(0deg, rgb(2, 3, 129) 25%, rgb(40, 116, 252) 100%);" class="card-header">
          <div class="row align-items-center">
            <div class="col-auto">
              <div class="logoz">
                <img src="img/psuzz.png" alt="">
              </div>
            </div>
            <div class="col">

              <h5 class="card-title fw-bold fs-2" style="color: white;">Personal Information</h5>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn btn-light back-btn">
                <i class="fas fa-arrow-left"></i>
              </button>
            </div>
          </div>
        </div>

        <div style="background-color:#f3f3f3" class="card-body">
          <form class="row g-3" method="post">
            <h3><b>Applicant's Information</b></h3>
            <div class="col-6">
              <label class="form-label">Full Name</label>
              <div class="input-field">
                <?php
                // Concatenating first name, middle name, and last name
                $fullName = $data["FirstName"] . " " . $data["MiddleName"] . " " . $data["LastName"];
                ?>
                <input type="text" id="Fullname" value="<?php echo $fullName; ?>">
              </div>
            </div>
            <div class="col-6">
              <label class="form-label">Student ID</label>
              <div class="input-field">
                <input type="text" id="Studentid" value="<?php echo $data["Studentid"]; ?>">
              </div>
            </div>

            <div class="col-6">
              <label class="form-label">Course</label>
              <div class="input-field">
                <input type="text" id="Course" placeholder="BSIT">
              </div>
            </div>
            <div class="col-6">
              <label class="form-label">Block</label>
              <div class="input-field">
                <input type="text" id="Block" placeholder="3C">
              </div>
            </div>
            <div class="col-12">
              <label class="form-label">Purpose</label>
              <div class="input-field">
                <input type="text" id="Purpose" placeholder="For scholarship">
              </div>
            </div>
            <h3><b>Contact Details</b></h3>
            <div class="col-6">
              <label class="form-label">Contact Number</label>
              <div class="input-field">
                <input type="text" id="Contact" value="<?php echo $data["Contact"]; ?>">
              </div>
            </div>
            <div class="col-6">
              <label class="form-label">Address</label>
              <div class="input-field">
                <input type="text" id="Address" value="<?php echo $data["Address"]; ?>">
              </div>
            </div>

            <div class="col-6">
              <label class="form-label">Email</label>
              <div class="input-field">
                <input type="text" id="Email" value="<?php echo $data["Email"]; ?>">
              </div>
            </div>

            <div class="card-footer">
              <div class="row justify-content-end">

                <div style="width: 100%; text-align: center;">

                  <button style="background-image:linear-gradient(0deg, rgb(2, 3, 129) 25%, rgb(40, 116, 252) 100%);" class="btn btn-primary" id="next" type="button">Next</button>
                </div>


              </div>
            </div>

          </form>
        <?php
      }
        ?>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      $(function() {

        $('#next').click(function() {
          request1();
        });

        function request1() {

          var Fullname = $('#Fullname').val();
          var Studentid = $('#Studentid').val();
          var Course = $('#Course').val();
          var Block = $('#Block').val();
          var Purpose = $('#Purpose').val();
          var Contact = $('#Contact').val();
          var Address = $('#Address').val();
          var Email = $('#Email').val();
          $.ajax({
            url: 'requestprocess1.php',
            method: 'post',
            data: {
              Fullname: Fullname,
              Studentid: Studentid,
              Course: Course,
              Block: Block,
              Purpose: Purpose,
              Contact: Contact,
              Address: Address,
              Email: Email,
            },
            dataType: 'json',

            success: function(response) {
              Swal.fire({
                title: response.title,
                icon: response.icon,
              });
              if (response.title == 'Successfully') {
                setTimeout(function() {
                  window.location.href = 'request2.php';
                }, 1500);

              }
            }

          });
        }
      });
    </script>
  </body>


</html>