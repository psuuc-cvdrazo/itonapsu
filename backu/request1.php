<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <link rel="stylesheet" href="request.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <h5 class="card-title fw-bold fs-2">Personal Information</h5>
          </div>
          <div class="col-auto">
            <button type="button" class="btn btn btn-secondary back-btn">Back</button>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form class="row g-3" method="post">
          <h3><b>Applicant's Information</b></h3>
          <div class="col-6">
            <label class="form-label">Full Name</label>
            <div class="input-field">
              <input type="text" id="Fullname" placeholder="Jobert Garcia">
            </div>
          </div>
          <div class="col-6">
            <label class="form-label">Student ID</label>
            <div class="input-field">
              <input type="text" id="Studentid" placeholder="21-UR-1000">
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
              <input type="text" id="Block" placeholder="3rd Year Block C">
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
              <input type="text" id="Contact" placeholder="09193332269">
            </div>
          </div>
          <div class="col-6">
            <label class="form-label">Address</label>
            <div class="input-field">
              <input type="text" id="Address" placeholder="1234 Main St">
            </div>
          </div>

          <div class="col-6">
            <label class="form-label">Email</label>
            <div class="input-field">
              <input type="text" id="Email" placeholder="jobertgarcia@gmail.com">
            </div>
          </div>
          <div class="card-footer">
            <div class="row justify-content-end">
              <div class="col-auto">
                <button class="btn btn-primary" id="next" type="button">Next</button>
              </div>
            </div>
          </div>

        </form>
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
            Fullname:Fullname,
            Studentid:Studentid,
            Course:Course,
            Block:Block,
            Purpose:Purpose,
            Contact:Contact,
            Address:Address,
            Email:Email,
          },
          dataType: 'json',

          success: function(response) {
            Swal.fire({
              title: response.title,
              icon: response.icon,
            });
            if (response.title == 'Successfully') {
              setTimeout(function() {
                window.location.href = 'login.php';
              }, 1500);

            }
          }

        });
      }
    });
  </script>
</body>


</html>