
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taste.it - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<?php

	include  "php/toplink.php";
	

	?>
	
</head>
<body>

	<?php

include "php/navbar.php";
	?>
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.it Restaurant</h2></span>
								<h1>Cooking Since</h1>
								<span class="subheading-2">1958</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.it Restaurant</h2></span>
								<h1>Best Quality</h1>
								<span class="subheading-2 sub">Food</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
<?php


if(isset($_SESSION['useremail'])){
?>
	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form method = "post" class="appointment-form">
						<h3 class="mb-3">Book your Table</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="name" name = "Rname"  class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email"  name = "Remail" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name = "Rphone"  class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" name = "Rdate"  class="form-control book_date" placeholder="Check-In">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text"  name = "Rtime" class="form-control book_time" placeholder="Time">
									</div>
								</div>
							</div>
						
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name = "Reservationbtn"  value="Book Your Table Now" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</div>
					</form>
					</div>
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading">About</span>
									<h2 class="mb-4">Welcome to Taste.it</h2>
								</div>
							</div>
							<div class="pl-lg-3 ml-md-5">
								<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php
	}


?>


	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>Now Booking</span>
					<h2>Private Dinners &amp; Happy Hours</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Menu</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Breakfast</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Lunch</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-pizza" style="left: 0;"></span>
						<span class="flat flaticon-chicken" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Dinner</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dinner-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-omelette" style="left: 0;"></span>
						<span class="flat flaticon-burger" style="right: 0;"></span>
					</div>
				</div>

				<!--  -->
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Desserts</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-cupcake" style="left: 0;"></span>
						<span class="flat flaticon-ice-cream" style="right: 0;"></span>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Wine Card</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Drinks &amp; Tea</h3>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<div class="menus border-bottom-0 d-flex ftco-animate">
							<div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3>Beef Roast Source</h3>
									</div>
									<div class="one-forth">
										<span class="price">$29</span>
									</div>
								</div>
								<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
							</div>
						</div>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>
			</div>
		</div>

	</section>









	<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-3 pb-2">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mt-3">Happy Customer</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-7">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<?php


include 'php/connection.php';



$query = "SELECT  
    signin.image, 
    signin.name, 
    signin.email, 
    signin.password, 
    signin.Number, 
    signin.`date of birth`, 
    signin.country, 
    signin.Gender, 
    signin.role,
	testimonals.feedback,
    testimonals.name AS testimonial_name  -- If you also want the testimonial name
FROM 
    signin
INNER JOIN 
    testimonals ON testimonals.userid = signin.id; ";
$result = mysqli_query($con, $query);
             if (mysqli_num_rows($result)) {
                
                while ($row = mysqli_fetch_array($result)) {
					$name = $row['name'];
					$email = $row['email'];
					$feedback = $row['feedback'];
					$image = $row['image'];

					
                    ?>
					<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4"><?php  echo $feedback?></p>
									<div class="user-img mb-4" >
										     <img src="userImages/<?php echo htmlspecialchars($row['image']); ?>" height="100px" width="250px" class="profile-image mb-5 rounded-circle" alt="Feedbackimage">

										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name"><?php echo $name ?></p>
									<span class="position"><?php echo $email?></span>
								</div>
							</div>
						</div>
                   <?php
                }
            } 
            ?>
					
					
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Chef</span>
					<h2 class="mb-4">Our Master Chef</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>John Gustavo</h3>
							<span class="position mb-2">CEO, Co Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Michelle Fraulen</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Alfred Smith</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Antonio Santibanez</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">This is our secrets</span>
						<h2 class="mb-4">Perfect Ingredients</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Blog</span>
					<h2 class="mb-4">Recent Blog</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>We Make Delicious &amp; Nutritious Food</h2>
					<a href="#" class="btn btn-white btn-outline-white">Book A Table Now</a>
				</div>
			</div>
		</div>
	</section>

		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Taste.it</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>
						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries.</p>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		

	
	


<?php
include 'php/footer.php';
include 'php/bottomlink.php';

?>
	</body>
	</html>