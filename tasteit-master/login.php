<!doctype html>
<html lang="en">

<head>
  <title>Login foam</title>
  <link rel="stylesheet" href="css/sigin.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

  <link rel="stylesheet" href="login.css">
</head>
<?php


include 'php/connection.php';
include 'php/loginfo.php';

?>
<body>
  <div class="container-fluid">
    <div class="box">

      <!-- Form Section on the Left -->
      <div class="form-section">
        <h1 class="text-center mb-4 text-uppercase" style="text-shadow: 2px 2px 4px #000;">LOGIN</h1>
        <form method="post"  action="login.php"  class="d-flex flex-column gap-3" > 
          <input type="email" name="loginemail" class="form-control" placeholder="Email" required />
          <input type="password" name="loginpassword" class="form-control" placeholder="Password" required />
          <button type="submit" name="loginBtn" class="btn">LOGIN</button>
          <div class="form-link">
            Don’t have an account? <a href="signininfo.php">Sign up</a>
          </div>
        </form>
      </div>

      <!-- Image Section on the Right -->
      <div class="image-section d-none d-md-block">
        <!-- Image handled via CSS -->
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
