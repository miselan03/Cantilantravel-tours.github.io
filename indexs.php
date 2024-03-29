<DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CANTILAN TRAVEL AND TOURS</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- css section -->

		<link rel="stylesheet" href="style.css">
	</head>

	<body>

<!-- start of header section -->

	<header>

		<div id="menu-bar" class="fas fa-bars"></div>

		<a href="#" class="logo"><span>Cantilan</span> TRAVELS & TOURS</a>

			<nav class="navbar">
				<a href="#home">Home</a>
				<a href="#book">Book</a>
				<a href="#packages">Packages</a>
				<a href="#services">Services</a>
				<a href="#gallery">Gallery</a>
				<a href="#review">Review</a>
				<a href="#contact">Contact</a>
			</nav>

		<div class="icons">
			<i class="fas fa-search" id="search-btn"></i>
		</div>

		<form action="" class="search-bar-container">
			<input type="search" id="search-bar" placeholder="search here...">
			<label for="search-bar" class="fas fa-search"></label>
		</form>

	</header>

<!-- end of header section -->

<!-- start of home section -->

	<section class="home" id="home">
		
	<div class="content">
		<h3>make your<span> life </span><br/> the best <span> adventure</span></h3>
		<p>Discover the Beauty of Cantilan... Seas your day ... adventure awaits</p>

	</div>

	<div class="video-container">
		<video src="images\vid1.mp4" id="video-slider" loop autoplay muted></video>
	</div>

	</section>

<!-- end of home section -->

<!-- start of booking section -->

	<setion class="book" id="book">

		<h1 class="heading">
			<span>B</span>
			<span>O</span>
			<span>O</span>
			<span>K</span>
			<span class="space"></span>
			<span>N</span>
			<span>O</span>
			<span>W</span>
		</h1>

		<div class="row">

			<div class="image">
				<img src="images\prends.jpg" alt="">
			</div>

			<form action="book_form.php" method="post" class="book-form">
				<div class="inputBox">
					<h3>Name: </h3>
					<input type="text" placeholder="Name of booker" name="name" id="fullname">
				</div>

				<div class="inputBox">
					<h3>email: </h3>
					<input type="email" placeholder="Enter your email" name="email">
				</div>

				<div class="inputBox">
					<h3>phone: </h3>
					<input type="text" placeholder="Number" name="phone">
				</div>

				<div class="inputBox">
					<h3>Address: </h3>
					<input type="text" placeholder="Enter your Address" name="address">
				</div>

				<div class="inputBox">
					<h3>Type of Package:</h3>
					<input type="text" placeholder="Place you want to visit" name="location">
				</div>

				<div class="inputBox">
					<h3>How many: </h3>
					<input type="number" placeholder="number of guests" name="guests">
				</div>

				<div class="inputBox">
					<h3>Arrivals: </h3>
					<input type="date" name="arrivals">
				</div>

				<div class="inputBox">
					<h3>Leaving: </h3>
					<input type="date" name="leaving">
				</div>
				<input type="submit"  value="Book Now" class="btn" name="send" id="fullname">

			</form>

		</div>

	</setion>

<!-- end of booking section -->	

<!-- start of packages section -->

	<section class="packages" id="packages">

		<h1 class="heading">
			<span>P</span>
			<span>A</span>
			<span>C</span>
			<span>K</span>
			<span>A</span>
			<span>G</span>
			<span>E</span>
			<span>S</span>
		</h1>

		<div class="box-container">

			<div class="box">
				<img src="images\packages\option1.jpg" alt="">
				<div class="content">
					<h3> <i class="fas fa-map-marker-alt"></i>Island Hopping Tour Package Option 1</h3>
					<p>Inclussions:</br>Tourist Boat and Land Tranportation Vehicle, Docking Fees, Lunch and Snacks, Souvenir T-shirt, good for 3 days.</p>
					<p>Destinations:</br>All around the beaches of Cantilan</p>
				</br>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					<div class="price"> Php8,880.00 <span>Php10,000.00</span></div>
					<a href="#book" class="btn">Book Now</a>
			</div>

		</div>

			<div class="box">
				<img src="images\packages\option2.jpg" alt="">
				<div class="content">
					<h3> <i class="fas fa-map-marker-alt"></i>Island Hopping Tour Package Option 2</h3>
					<p>Inclussions:</br>Tourist Boat, Docking Fees, Lunch and Snacks, Souvenir T-shirt, good for 3 days.</p>
					<p>Destinations:</br>Ayoke Island, Libtong Cove, Rockgem Treasure Island, Casa Rica Islet, Huyamao Island, & Double B</p>
				</br>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<div class="price"> Php6,000.00 <span>Php8,000.00</span></div>
					<a href="#book" class="btn">Book Now</a>
			</div>

		</div>

			<div class="box">
				<img src="images\packages\option3.jpg" alt="">
				<div class="content">
					<h3> <i class="fas fa-map-marker-alt"></i>Island Hopping Tour Package Option 3</h3>
					<p>Inclussions:</br>Tourist Boat, Docking Fees, Lunch and Snacks, Souvenir T-shirt, good for 1 day.</p>
					<p>Destinations:</br>Ayoke Island, Libtong Cove, Rockgem Treasure Island, Casa Rica Islet, Huyamao Island, & Double B</p>
				</br>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
					</div>
					<div class="price"> Php3,500.00 <span>Php5,665.00</span></div>
					<a href="#book" class="btn">Book Now</a>
			</div>

		</div>

			

	</section>

<!-- end of packages section -->

<!-- start of services section -->

	<section class="services" id="services">

			<h1 class="heading">
				<span>S</span>
				<span>E</span>
				<span>R</span>
				<span>V</span>
				<span>I</span>
				<span>C</span>
				<span>E</span>
				<span>S</span>
			</h1>

			<div class="box-container">

				<div class="box">
					<i class="fas fa-hotel"></i>
					<h3>affordable hotels</h3>
					<p>The perfect places for getaways...<br/>Hotels that give extra services and provides clean rooms that are safe and meet the basic needs of our guest!</p>
				</div>

				<div class="box">
					<i class="fas fa-utensils"></i>
					<h3>food and drinks</h3>
					<p>Every morning is a fresh catch, and taste joy after every sip...<br/>Enhanced menu with healthier options and a perfect drinks to go along with our delicacy.</p>
				</div>

				<div class="box">
					<i class="fas fa-bullhorn"></i>
					<h3>safety guide</h3>
					<p>We value your safety...<br/>We aim for zero incidents and actively caring fr others.</p>
				</div>

				<div class="box">
					<i class="fas fa-plane"></i>
					<h3>fastest travel</h3>
					<p>Discover a better way to travel...<br/>Can travel fast on calm waters as well as withstanding gushing waves.</p>
				</div>

				<div class="box">
					<i class="fas fa-hiking"></i>
					<h3>adventures</h3>
					<p>The Journey matters more than the destination...<br/>Ensures you to not only enperience the land of a new place but also the ocean.</p>
				</div>


			</div>


	</section>

<!-- end of services section -->

<!-- start of gallery section -->

	<section class="gallery" id="gallery">

		<h1 class="heading">
			<span>G</span>
			<span>A</span>
			<span>L</span>
			<span>L</span>
			<span>E</span>
			<span>R</span>
			<span>Y</span>
		</h1>

			<div class="box-container">

				<div class="box">
				<img src="images\ayoke4.jpg" alt="">
				<div class="content">
					<h3>Ayoke Island</h3>
					<p>Sitio Ayoke, Barangay General Island, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\inijakan1.jpg" alt="">
				<div class="content">
					<h3>Inijikan Beach Club</h3>
					<p>Inijakan, General Island, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\libtong4.jpg" alt="">
				<div class="content">
					<h3>Libtong Cove</h3>
					<p>General Island, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\rockgem1.jpg" alt="">
				<div class="content">
					<h3>Rockgem Treasure Island</h3>
					<p>General Island, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\casarica1.jpg" alt="">
				<div class="content">
					<h3>Casa Rica Islet</h3>
					<p>Consuelo, Cantilan, S.D.S.</p>
				</div>
			</div>

		<div class="box">
				<img src="images\huyamao1.jpg" alt="">
				<div class="content">
					<h3>Huyamao Beach Park & Campsite</h3>
					<p>Huyamao Island, Consuelo, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\mested5.jpg" alt="">
				<div class="content">
					<h3>Mested Beach Resort</h3>
					<p>Bahang-Bahang, Consuelo, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\consuelo1.jpg" alt="">
				<div class="content">
					<h3>Consuelo Rock Formation</h3>
					<p>Barangay Consuelo, Cantilan, S.D.S.</p>
				</div>
			</div>

			<div class="box">
				<img src="images\agila1.jpg" alt="">
				<div class="content">
					<h3>Agila White Beach Resort</h3>
					<p>Sitio Cabitoonan, Consuelo, Cantilan, S.D.S.</p>
				</div>
			</div>

		</div>

	</section>

<!-- end of gallery section -->

<!-- start of review section -->

	<section class="review" id="review">

		<h1 class="heading">
			<span>R</span>
			<span>E</span>
			<span>V</span>
			<span>I</span>
			<span>E</span>
			<span>W</span>
		</h1>

			<div class="swiper review-slider">

				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="box">
							<img src="images\review\lez.jpeg" alt="">
							<h3>Liezel Dalisay Ruaza</h3>
							<p>The locations are wonderful and the site is in some ways handy and cost-effective.</p>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="box">
							<img src="images\review\ems.jpg" alt="">
							<h3>Emily Sotoniel</h3>
							<p>Convenient and affordable</p>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
						</div>
					</div>

				<div class="swiper-slide">
						<div class="box">
							<img src="images\review\angela.jpeg" alt="">
							<h3>Angela Ejos</h3>
							<p>The locations they highlight are in some ways suitable for couples who wished to conduct their picture session. </p>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
				</div>

				<div class="swiper-slide">
						<div class="box">
							<img src="images\review\carm.jpg" alt="">
							<h3>Carmela Manzano</h3>
							<p>Such a perfect places to unwind.</p>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
						</div>
				</div>

				<div class="swiper-slide">
						<div class="box">
							<img src="images\review\jess.jpg" alt="">
							<h3>Jessiane Llido</h3>
							<p>Perfect</p>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
				</div>

			</div>

		</div>

	</section>

<!-- end of review section -->	

<!-- footer section -->

<section class="footer">
	
	<div class="box-container">

		<div class="box">
			<h3>About Us</h3>
			<p>We book you to your safe haven</p>
		</div>

		<div class="box">
			<h3>Location</h3>
			<p>Lininti-an, Cantilan, S.D.S.</p>
		</div>

		<div class="box">
			<h3>Quick Links</h3>
				<a href="#home">Home</a>
				<a href="#book">Book</a>
				<a href="#packages">Packages</a>
				<a href="#services">Services</a>
				<a href="#gallery">Gallery</a>
				<a href="#review">Review</a>
		</div>
		<div class="box">
			<h3>Follow Us</h3>
			<a href="#">Facebook</a>
			<a href="#">Instagram</a>
			<a href="#">Twitter</a>
		</div>

	</div>

	<h1 class="credit">Created by <span> Group 1 </span> | all rights reserved! </h1>

</section>
















<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
<script> 
	<script>
    function show_alert(){
  var name = document.getElementById('fullname').value;
  alert("We received your booking application and for our feedback always check the inbox of your email @")+""+email + ""); 
}
</script>


	</body>
</html>