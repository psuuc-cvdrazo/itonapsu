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
            <h5 class="card-title">Personal Information</h5>
          </div>
          <div class="col-auto">
            <button type="button" class="btn btn-sm btn-secondary back-btn">Back</button>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form class="row g-3">
          <h3><b>Applicant's Information</b></h3>
          <div class="col-md-6">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label class="form-label">Student ID</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-6">
            <label  class="form-label">Grade Level</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">Section</label>
            <input type="password" class="form-control" >
          </div>
          <div class="col-md-12">
            <label class="form-label">Purpose</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

          </div>  
          <h3><b>Contact Details</b></h3>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Contact Number</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-6">
            <label for="inputAddress" class="form-label">Address</label>
            <div class="input-field">
            <i class="fas fa-user"></i>

            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
          </div>

          <div class="col-6">
            <label for="inputAddress2" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-6">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>