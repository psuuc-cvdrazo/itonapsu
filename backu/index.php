<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/landingpage/style1.css">
	<link rel="stylesheet" href="css/landingpage/style2.css">
	<link rel="stylesheet" href="css/landingpage/style0.css">
	<link rel="stylesheet" href="css/landingpage/style3.css">
	<link rel="stylesheet" href="css/landingpage/style4.css">
	<script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" charset="utf-8"></script>
</head>
<style>
	.navbar.scrolled {
		background-color: #ffffff;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}

	section {
		position: relative;
		min-height: 100vh;
		background-image: url('img/psuz.png');
		background-repeat: no-repeat;
		background-size: cover;
	}

	.thirdsection {
		position: relative;
		min-height: 100vh;
		background-image: url('img/steps.png');
		background-repeat: no-repeat;
		background-size: cover;
	}

	div.copyright {
		background-color: black;
		padding: 15px 0px;
	}

	div.copyright p {
		font-size: small;
		color: white;
		text-align: center;
	}
	li a {
		text-decoration: none;
	}
</style>

<body>
	<div class="navcover">
		<div class="navbar">

			<div class="logoz">
				<img src="img/psuzz.png" alt="">
			</div>

			<nav>
				<ul id="menuList">
					<li><a href="#"> Home </a></li>
					<li><a href="#sbsr-333"> About </a></li>
					<li><a href="#guid"> Guidelines </a></li>
					<li><a href="#cont"> Contact </a></li>
					<li><a href=""> Status </a></li>
					<li><a href="login.php"> Login </a></li>
				</ul>
			</nav>
			<img src="img/menu.png" class="menu-icon" onclick="togglemenu()">
		</div>
	</div>

	<section>

		<div class="container">


			<div class="row">
				<div class="col-1">
					<h2> PANGASINAN STATE <br> UNIVERISITY URDANETA </h2>
					<p> ONLINE DOCUMENT REQUEST SYSTEM</p>
					<h4> </h4>
					<button type="button"><a href="login.php">Request Now!</a><img src="img/arrow.png"></button>
				</div>
				<div class="col-2">
					<img src="img/ikot.gif" class="vector">
					<div class="color-box"> </div>
					<div class="signup-btn">
						<a href="login.php"><img src="img/add.png"></a>
						<p> <small> Sign in </small></p>
					</div>
				</div>
			</div>
	</section>

	<div class="secondsection" id="sbsr-333">
		<center>
			<h2 style="color: white;" class="cs-title">About</h2>
		</center>
		<br><br>
		<div class="cs-container">

			<div class="cs-image-group">
				<picture class="cs-picture">
					<img src="img/stud.jpg" alt="students">

					<img loading="lazy" decoding="async" src="img/stud.jpg" alt="cleaner" width="630" height="630" aria-hidden="true">
				</picture>
				<div class="cs-box">
					<!-- <span class="cs-number">12</span>
					<span class="cs-desc">Years<br> Experience</span> -->
				</div>
			</div>


			<div class="cs-content">
				<p class="about2">Our platform is designed to simplify the process of requesting and accessing
					documents. Whether you are a student, alumni, or admin, our system is here to make your document
					retrieval experience seamless and efficient. Our online request form allows you to provide all the
					necessary details about the document you need, ensuring accurate and prompt fulfillment of your
					request.</p>


			</div>
		</div>
	</div>

	<div class="thirdsection" id="guid">

		<div class="thirdsection" id="services-1188">
			<div class="cs-container">
				<div class="cs-content">

					<h2 class="cs-title">Guidelines</h2>
					<p style="color: #010202;" class="cs-text">
						this are the guidelines steps
					</p>
				</div>
				<ul class="cs-card-group">
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">01</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">Start by identifying the specific document you need to request.</h3>
							<p class="cs-item-text">Common examples include transcripts, certifications, and
								authentication records.</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">02</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">Fill out the necesary forms accurately and ensure that all information is
								complete.</h3>
							<p class="cs-item-text">Take a moment to review your details before submitting the form to
								prevent any processing delays.</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">03</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">Proceed to the PIT Cashier office to make the payment for your requested
								document(s).</h3>
							<p class="cs-item-text">Once you've paid, submit the Official Receipt
								and other transaction details in the Status Tab in the system.
							</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">04</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">After submitting your payment information, patiently wait the
								processing of your request by the Admin.</h3>
							<p class="cs-item-text">Keep an eye on the Tracking bar to stay updated on the status of
								your document(s).
							</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">05</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">Once processed, collect the document from the PIT Registrar Office. Don't
								forget to bring your claim stub in claiming your document(s).</h3>
							<p class="cs-item-text">Before leaving, carefully review the document to ensure its accuracy
								and completeness.
							</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">06</h1>
						</picture>

						<div class="cs-text-group">
							<h3 class="cs-h3">If you wish to cancel your request, you can go to Cancel Request section
								on Status, input the Reference Number and the reason why you want to cancel the
								requested document(s).</h3>
							<p class="cs-item-text">Note: This is only applicable to those who are not paid their
								requested document(s) yet.</p>
						</div>
					</li>
				</ul>

			</div>
		</div>







	</div>


	<div class="fourth" id="cont">
		<div class="fourthsection" id="contact-1388">
			<center>
				<h2 style="color: #ffffff;" class="cs-title">Get in Touch</h2>
			</center>
			<br><br>

			<center>
				<p class="cs-text">
					Do you have a few questions? Contact us and we will be more than happy to assist you.
				</p>
			</center>
			<div class="cs-container">

				<div class="cs-content">

					<span class="cs-topper">Contact Us</span>
					<ul class="cs-ul">
						<li class="cs-li">
							<picture class="cs-icon-wrapper">
								<img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/phone-76.svg" alt="phone icon" class="cs-icon" width="40" height="40" decoding="async">
							</picture>
							<div class="cs-flex-group">
								<span class="cs-header">Phone</span>
								<a style="color: #ffffff;" href="tel:888-4565-789
							" class="cs-link">+1 (888) 4565 789
								</a>
							</div>
						</li>
						<li class="cs-li">
							<picture class="cs-icon-wrapper">
								<img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/mail-76.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
							</picture>
							<div class="cs-flex-group">
								<span class="cs-header">Email</span>
								<a style="color: #ffffff;" href="psu@edu.ph.com" class="cs-link">psu@edu.ph</a>
							</div>
						</li>

					</ul>
				</div>
				<div class="cs-content">
					<span class="cs-topper">Keep Connected to</span>
					<ul class="cs-ul">

						<li class="cs-li">
							<picture class="cs-icon-wrapper">
								<img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/facebook.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
							</picture>
							<div class="cs-flex-group">
								<span class="cs-header">Facebook</span>
								<a style="color: #ffffff;" href="psu@edu.ph.com" class="cs-link">Pangasinan State
									University Urdaneta</a>
							</div>
						</li>
						<li class="cs-li">
							<picture class="cs-icon-wrapper">
								<img aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/pin-76.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
							</picture>
							<div class="cs-flex-group">
								<span class="cs-header">Address</span>
								<a href="" style="color: #ffffff;" class="cs-link">Pangasinan State University
									Urdaneta</a>
							</div>
						</li>
					</ul>
				</div>


			</div>
		</div>
	</div>
	<div style="background-color: rgb(17, 17, 114);" class="footer">
		<center>
			<footer>
				<p style="color: #ffda27;">Copyright Christian & Vince &copy; 2024</p>
			</footer>
		</center>
	</div>

</body>



</html>

<script>
	function togglemenu() {
		var x = document.getElementById("menuList");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>