<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIgn in foam </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="signup.css">

</head>
<?php
include 'php/connection.php';
include 'php/insertedinfo.php';


?>
<body>
  <div class="container-fluid">
    <div class="box">

      <!-- Image Section -->
      <div class="image-section d-none d-md-block">
        <!-- Background image handled in CSS -->
      </div>

      <!-- Form Section -->
      <div class="form-section">
        <h1 class="text-center mb-4 text-uppercase" style="text-shadow: 2px 2px 4px #000;">REGISTRATION</h1>
        <form method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3"  method = "post"enctype = "multipart/form-data">
          <input type="file" name="Rimages" class="form-control" />
          <input type="text" name="Rname" class="form-control" placeholder="Name" required />
          <input type="email" name="Remail" class="form-control" placeholder="Email" required />
          <input type="password" name="Rpassword" class="form-control" placeholder="Password" required />
          <input type="number" name="RNumber" class="form-control" placeholder="Number" />
          <input type="date" name="RDOB" class="form-control" />
          <select class="form-select" name="Rcountry" required>
            <option value="" disabled selected>Select Country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="India">India</option>
            <option value="Russia">Russia</option>
            <option value="Lahore">Lahore</option>
            <option value="Islamabad">Islamabad</option>
          </select>

          <div class="gender-group">
            <label>Gender:</label>
            <input type="radio" name="Rgender" value="male" id="genderMale" />
            <label for="genderMale">Male</label>
            <input type="radio" name="Rgender" value="female" id="genderFemale" />
            <label for="genderFemale">Female</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" />
            <label for="rememberMe" class="form-check-label">Remember me</label>
          </div>

          <button type="submit" name="Rbtnregister" class="btn">SIGN IN</button>
          <div class="form-link">
            Do  have an account? <a href="login.php">Log in </a>
          </div>
          <p class="text-center text-muted mt-3">&copy; 2017–2025</p>
        </form>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
