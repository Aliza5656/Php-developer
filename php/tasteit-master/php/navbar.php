
<?php
session_start();

$currentpage = basename($_SERVER['REQUEST_URI']);




?>

<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span>
					<?php

if (isset($_SESSION['useremail'])) {
  echo $_SESSION['useremail'];
}
?>

				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Taste.<span>it</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

	<div class="collapse navbar-collapse" id="ftco-nav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item <?php echo ($currentpage == "index.php" ? 'active' : '' ); ?>">
      <a href="index.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item <?php echo ($currentpage == "about.php" ? 'active' : '' ); ?>">
      <a href="about.php" class="nav-link">About</a>
    </li>
    <li class="nav-item <?php echo ($currentpage == "chef.php" ? 'active' : '' ); ?>">
      <a href="chef.php" class="nav-link">Chef</a>
    </li>
    <li class="nav-item <?php echo ($currentpage == "menu.php" ? 'active' : '' ); ?>">
      <a href="menu.php" class="nav-link">Menu</a>
    </li>

    <?php if (isset($_SESSION['useremail'])) { ?>
      <li class="nav-item <?php echo ($currentpage == "reservation.php" ? 'active' : '' ); ?>">
        <a href="reservation.php" class="nav-link">Reservation</a>
      </li>
      <li class="nav-item <?php echo ($currentpage == "blog.php" ? 'active' : '' ); ?>">
        <a href="blog.php" class="nav-link">Blog</a>
      </li>
      <li class="nav-item <?php echo ($currentpage == "contact.php" ? 'active' : '' ); ?>">
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
      <li class="nav-item <?php echo ($currentpage == "Profile.php" ? 'active' : '' ); ?>">
        <a href="profile.php" class="nav-link"><?php  
        if(isset(  $_SESSION['user_name'])){

          echo $_SESSION['user_name'];
        }
        
        ?></a>
      </li>
      <li class="nav-item <?php echo ($currentpage == "logout.php" ? 'active' : '' ); ?>">
        <a href="php/logout.php" class="nav-link">Logout</a>
      </li>
    <?php } else { ?>
      <li class="nav-item <?php echo ($currentpage == "signininfo.php" ? 'active' : '' ); ?>">
        <a href="signininfo.php" class="nav-link">SIGN IN</a>
      </li>
      <li class="nav-item <?php echo ($currentpage == "login.php" ? 'active' : '' ); ?>">
        <a href="login.php" class="nav-link">LOG IN</a>
      </li>
    <?php } ?>
  </ul>
</div>








				</ul>
			</div>
		</div>
	</nav>


	