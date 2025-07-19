
<?php


session_start();

if(isset($_SESSION['adminemail'])){


}
else
{
    header('location:../login.php');
}
?>



<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    rel="stylesheet"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Hello, world!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <!-- Admin email on the left -->
     <div class="d-flex justify-content-center align-items-center " >
    <p class="text-white fw-bold mb-0">
      <?php echo $_SESSION['adminemail'] ?>
    </p>
    </div>

    <!-- Toggler button for mobile -->
    <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <!-- Nav links -->
      <ul class="navbar-nav me-auto mb-2  mb-lg-0 font-serif fw-bold text-capitalize">
        <li class="nav-item">
          <a href="userinfo.php" class="nav-link text-white  ps-5">
            <i class="fa-solid fa-circle-user text-white"></i> UserInfo
          </a>
        </li>
      
        <li class="nav-item">
          <a href="delete.php" class="nav-link text-white">
            <i class="fa-solid fa-trash text-white pe-2"></i> Delete
          </a> 
        </li>
        <li class="nav-item">
          <a href="usercontact.php" class="nav-link text-white">
            <i class="fa-regular fa-address-card text-white pe-2"></i> Contact
          </a>
        </li>
         <li class="nav-item">
          <a href="../php/logout.php" class="nav-link text-white">
            <i class="fa-regular fa-address-trash text-white pe-2"></i> LOGOut
          </a>
        </li>
      
      </ul>
       

      <!-- Search form -->
      <form class="d-flex w-30 w-lg-auto" role="search">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
