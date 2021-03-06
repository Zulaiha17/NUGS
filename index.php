<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'includes/head_items.php'; ?>
    <!--Scroll Reveal-->
    <script type="text/javascript" src="scripts/scrollreveal.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!--Flickity-->
	<!-- CSS -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<!-- JavaScript -->
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<title>NUGS UKRAINE</title>
</head>
<body>
	<!--Loader Script-->
	<script type="text/javascript">
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            /*setTimeout(function(){
                $(".se-pre-con").fadeOut("slow");;
            },3000);*/

            $(".se-pre-con").fadeOut("slow");;
            
        });

        //Initialise AOS
        AOS.init();  
    </script>


    <!--Pre Loader-->
    <div class="se-pre-con"></div>
	
	<!--Navbar-->
	<?php include_once 'includes/navbar.php'?>

	<!--Main Carousel-->
	<?php include_once 'includes/main_carousel.php'?>
	<!--End of Main Carousel-->

	<!---->
	<a href="#" id="scroll-to-top" class="bg-danger rounded d-none">
		<i class="fas fa-angle-up fa-3x pl-2"></i>
	</a>

	<!--Notto Section-->
	<div id="nugs-first" class="jumbotron jumbotron-fluid bg-white mt-0">
		<div class="container">
			<div class="row">
				<div id="batch-col" class="col-md-4 pt-5">
					<img data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300" src="images/logos/nugs_ukraine.jpg" alt="Large Nugs Image" class="img-fluid mx-auto mb-5">
					
					<blockquote class="blockquote text-center text-nugs-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
						<i class="fas fa-quote-left"></i>
						Good character, a must have of perfect education
						<i class="fas fa-quote-right"></i>
					</blockquote>					
				</div>

				<div class="col-md-8 pt-5">
					<div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
						<h1 class="text-nugs-2 text-center display-4">
							NATIONAL UNION OF GHANA STUDENTS<br>
						</h1>

						<h1 class="text-nugs-2 text-center display-5">
							- UKRAINE -<br>
							OFFICIAL WEBSITE
						</h1>

						<h3 class="text-nugs-1 text-center">EST. 2015</h3>
					</div>

					<h3 class="text-center display-4 text-danger mt-3" data-aos="fade-up" data-aos-duration="820" data-aos-delay="100">
						Aluta Continua.. Victoria Ascerta
					</h3>
				</div>
				<!-- <span id="arrow-down" class="m-auto bounce">
					<i class="fas fa-angle-double-down fa-3x"></i>
				</span> -->
			</div>
		</div>
	</div>
	<!--End of Motto Section-->

	<!--WELCOME NOTE-->
	<div id="welcome-section" class="w-100 bg-light">
		<div class="container pt-4 pb-4">
			<div class="row">
				<div class="col-md-4" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="100">
					<img id="by" class="img-fluid rounded-circle mx-auto" src="images/homepage/user_transparent_back.jpg" alt="Note By">
				</div>

				<div id="welcome-note-col" class="col-md-8"  data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-in-sine" data-aos-delay="200">
					<h3 class="text-center display-4 text-nugs-1">Welcome</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

			</div>
		</div>
	</div>

	<!--NUGS-UA Slides-->
	<div class="container-fluid mt-3">
		<h1 class="display-4 text-nugs-1" data-aos="flip-up" data-aos-duration="800" data-aos-easing="ease-in-linear" data-aos-delay="200">NUGS-UA</h1>
		<div class="left-carousel" data-flickity='{ "autoPlay": true , "wrapAround": true }'>
			<div class="carousel-cell">
				<h1>
					ALUTA CONTINUA ALUTA VICTORIA
				</h1>
			</div>
			<div class="carousel-cell">
				<h1>NUGS-UA CALENDER</h1>
				<p class="lead">
					Our all new Calender is epic!!!
					...with a kufe span of 21 years

					It features our meetings and activities
					specifically suited for student convenience...

					We meet 3 times in a year to talk, socialise share
					ideas and of course ITEM 13 is forever assured

					We grand the end of the year with our all new GRADUATION
					BALL and INAUGURAL graduates... and of course "dress
					to pepper them" is our code
				</p>
			</div>
			<div class="carousel-cell">
				<h1>NUGS MEDIA UA</h1>
				<p class="lead">
					With the official approval if our all new Media 
					Committee at our just ended 2nd assembly:

					Nugs-ua is about to go BOOM!!!

					Stay tuned for upcoming beautiful initiatives from this
					able directorate

					The got us covered at all corners
				</p>
			</div>
			<div class="carousel-cell">
				<h1>NUGS-UA FACEBOOK LIVE LECTURES</h1>
				<p class="lead">
					Our never before Facebook live lectures is the bomb!!!

It's a beautiful initiative geared to assist Ghanaian medical students
with the GMDC provisional licensure exams...

It's step wise, brief and very easy to understand...


Indeed our pass rate is bound to be bountiful...
				</p>
			</div>
			<div class="carousel-cell">
				<h1>NUGS-UA DATABASE</h1>
				<p class="lead">
					Our Co-ordinator are the best there can ever be!!!

					Check out our grabd data base both in hard and softcopy

					A data-base that would bear all the essentials of your
					identity...

					Incase of any loss of identification documents just contact
					nugs-UA for informations on identification numbers of documents
					and you are covered...

					Did you register yet? Better hurry
				</p>
			</div>
			<div class="carousel-cell">
				<h1>NUGS-UA RESEARCH COMPETITION</h1>
				<p class="lead">
					Have you heard of our research competition

					Nugs-UA presents to this never before research competition
					applicable to all areas of study... medicine, engineerinf etc

					Participants are to come up with a research geared towards the development
					of Ghana...

					The winner takes all!!! A conference trip outside Ukraine, a chance
					to win over GHC 5,000...


					Grab your forms now now!!!
				</p>
			</div>
			<div class="carousel-cell">
				<h1>NUGS-UA WEBSITE</h1>
				<p class="lead">
					Have you checked out our website?
					nugs-ukraine.com
					Our website is GRAND

					It features an E-Library; get all the materials you need
					for a successful education, ranging from meidcine,
					economics, engineering, international relations etc.

					We further wet your appetite with our ultra gallery
					featuring pictures from our lst independence celebration,
					pictures of our able National Executive Council etc...

					We don't stop there... get the latest news, announcements
					in Ukraine, especially ones that affect student livelihood...
					you never know what you may be missing...

					It further serves as a channel to get in touch with our dear
					members; concerns, suggestions, on all issues...we are here for you...
				</p>
			</div>
			<div class="carousel-cell">
				<h1>REGISTRATION OF NUGS-UA</h1>
				<p class="lead">
					The national Executive counsil in her wisdom with the support
					and guidance from our Honorary Consular, Dr Albert Kitcher,
					through it essential to get our union registered.

					This grants our union a legal recognition as an organization
					in Ukraine further strengthening our stance in development
					and defending the wellbeing of our dear members.

					An initiative that indeed would keep our coffers safe. As a
					registered organization er get oppurtunity to save in the bank,
					reducing risk of loss of funds, misapproproation etc whic could be
					in cases of funds being kept by individuals
				</p>
			</div>
		</div>
	</div>

	<!--Fixed Background Section-->
	<!-- <div  class="mt-5 w-100"> -->
		<div id="fixed-back" class="container-fluid mt-5">
			<h2 data-aos="zoom-in-up"
     			data-aos-easing="ease-out-cubic"
     			data-aos-duration="2000" class="text-white text-center">
     		Promoting and advancing the interest of Ghanaian students and residents in Ukraine
     		</h2>
		</div>
	<!-- </div> -->
	
	<div id="footer-top" class="w-100">
		<div class="container pt-2 pb-2">
			<div class="row">
				<div class="col border-right border-info">
					<ul class="list-unstyled flex-column" data-aos="fade-right" data-aos-duration="1000">
						<li><a href="#">Welcome</a></li>
						<li><a href="#">News and Events</a></li>
						<li><a href="#">Study in Ukraine</a></li>
						<li><a href="#">Online Library</a></li>
						<li><a href="#">Executives</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>

				<div class="col">
					
					<form id="home-contact-us" data-aos="fade-left" data-aos-duration="1000">
						<h5>Contact Us</h5>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">
									<i class="fas fa-user"></i>
								</span>
							</div>
							<input class="form-control" type="text" name="name" placeholder="Name">
						</div>

						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">
									<i class="fas fa-envelope"></i>
								</span>
							</div>
							<input class="form-control" type="text" name="name" placeholder="Email">
						</div>

						<textarea class="form-control" placeholder="Message"></textarea>

						<button type="submit" class="btn btn-defaults mt-2">Send Message</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<?php include_once 'includes/footer.php'?>

</body>
</html>