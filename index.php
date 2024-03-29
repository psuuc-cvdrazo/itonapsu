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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"charset="utf-8"></script>
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
.thirdsection{
	position: relative;
    min-height: 100vh;
    /* background-image: url('img/steps.png'); */
	background-image: linear-gradient(0deg, rgb(2, 3, 129) 25%, rgb(40, 116, 252) 100%);
    background-repeat: no-repeat;
    background-size:cover;
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

.cs-container2 {
    display: flex;
    justify-content: center;
    align-items: stretch; 
    position: relative;
  }

  .cs-container2::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 10px;
    background-color: #ffffff; 
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
				   <p>  ONLINE DOCUMENT REQUEST SYSTEM</p>
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
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br>
	
	<center>
		<h2 style="background: linear-gradient(-45deg, #0927d8, #04befe); display: inline; -webkit-background-clip: text; -webkit-text-fill-color: transparent; border-bottom: 10px solid #ffda27;" class="cs-title">About</h2>
	  </center>
	  
		  
	
	  
<br><br>
	<div class="secondsection" id="sbsr-333">
		
		<br><br>
		<div class="cs-container2">
			
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
				      <p class="about2">Our platform is designed to simplify the <br> process of requesting and accessing documents. Whether you are a student, alumni, or admin, our system is here to make your document retrieval experience seamless and efficient. Our online request form allows you to provide all the necessary details about the document you need, ensuring accurate and prompt fulfillment of your request.</p>
				
				
			</div>
		</div>
	</div>

	<br><br><br><br><br><br><br><br><br>
	<center>
		<h2 style="background: linear-gradient(-45deg, #0927d8, #04befe); display: inline; -webkit-background-clip: text; -webkit-text-fill-color: transparent; border-bottom: 10px solid #ffda27;" class="cs-title">Guidelines</h2>
	  </center>
	  
	  
<br><br  id="guid">


	<div class="thirdsection">

		<div class="thirdsection" id="services-1188">
			<div class="cs-container">
				<div class="cs-content">
					
				
					<p style="color: #ffffff;" class="cs-text">
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
							<h3 class="cs-h3">Fill out the necesary forms accurately and ensure that all information is complete.</h3>
							<p class="cs-item-text">Take a moment to review your details before submitting the form to prevent any processing delays.</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">03</h1>
						</picture>
				
						<div class="cs-text-group">
							<h3 class="cs-h3">Proceed to the PIT Cashier office to make the payment for your requested document(s).</h3>
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
							<p class="cs-item-text">Keep an eye on the Tracking bar to stay updated on the status of your document(s).
							</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">05</h1>
						</picture>
						
						<div class="cs-text-group">
							<h3 class="cs-h3">After processing, retrieve your document(s) from the PIT Registrar Office with your claim stub.</h3>
							<p class="cs-item-text">Before leaving, carefully review the document to ensure its accuracy and completeness.
							</p>
						</div>
					</li>
					<li class="cs-item">
						<picture class="cs-picture">
							<h1 style="font-size: large; font-weight:bolder ;" class="cs-h3">06</h1>
						</picture>
						
						<div class="cs-text-group">
							<h3 class="cs-h3">
								To cancel, enter your Reference Number and reason in the "Cancel Request" section of "Status."</h3>
							<p class="cs-item-text">Note: This is only applicable to those who are not paid their requested document(s) yet.</p>
						</div>
					</li>
				</ul>
				
			</div>
		</div>

			
		</div>

		<br><br><br><br><br><br><br id="cont">
		<center>
			<h2 style="background: linear-gradient(-45deg, #0927d8, #04befe); display: inline; -webkit-background-clip: text; -webkit-text-fill-color: transparent; border-bottom: 10px solid #ffda27;" class="cs-title">Contact</h2>
		  </center>
		  
	  
<br><br>

		<footer style="background-image: linear-gradient(0deg, rgb(2, 3, 129) 25%, rgb(40, 116, 252) 100%);" class="bg-body-tertiary text-center text-lg-start">
		
			<br><br>
			<div class="text-lg-center" style="color: #ffffff;">
			 
			  <div class="row">
				
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				  <h5 class="text-uppercase" style="font-weight: bolder;">CONTACT US</h5>
				  <br>
				  <picture class="cs-icon-wrapper">
					<img style="color: #ffffff;" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/phone-76.svg" alt="phone icon" class="cs-icon" width="40" height="40" decoding="async">
				</picture>
				  <h4>Phone</h4>
				  <p>
					+1(69)094234234
				  </p>
				  <br>
				  <picture class="cs-icon-wrapper">
					<img style="color: #ffffff;" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/mail-76.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
				</picture>
				  <h4>Email</h4>
				  <p>
				Psu@edu.ph
				  </p>
				</div>
			
				<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				  <h5 class="text-uppercase" style="font-weight: bolder;">KEEP CONNECTED TO</h5>
				 <br>
				  <picture class="cs-icon-wrapper">
					<img  aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/facebook.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
				
				</picture>
				  <h4>Facebook</h4>
				  <p href="https://www.facebook.com/psuurdofficial">
					Pangasinan State University Urdaneta
				  </p>
				  <br>
				  <picture class="cs-icon-wrapper">
					<img style="color: #ffffff;" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/pin-76.svg" alt="address icon" class="cs-icon" width="40" height="40" decoding="async">
				</picture>
				  <h4>Address</h4>
				  <p>
					McArthur Highway, Barangay San Vicente, Urdaneta City
				  </p>
				</div>
			
			  </div>
			 
			</div>
			
		  
			
			<div class="text-center p-3" style="background-color: #f7ca00;">
			  © 2024 Copyright:
			  <a class="text-body" href="#">christian & vince</a>
			</div>
			
		  </footer>
	
	</body>


	
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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