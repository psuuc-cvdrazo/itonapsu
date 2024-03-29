<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/landingpage/style0.css">



	<script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
		integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
		crossorigin="anonymous" charset="utf-8"></script>
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
</style>

<body>
	<div class="navcover">
		<div class="navbar">

			<div class="logoz">
				<img src="img/psuzz.png" alt="">
			</div>

			<nav>
				<ul id="menuList">
					<li><a href="#homez"> Home </a></li>
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
		<?php
		include ('landingpart/mainpage.php');
		?>
	</section>
	<br><br><br><br><br><br><br><br><br>
	<?php
	include ('landingpart/aboutpage.php');
	?>
	<br><br><br><br><br><br><br><br><br>
	<?php
	include ('landingpart/guidepage.php');
	?>
	<br><br><br><br><br><br><br id="cont">
	<center>
		<h2 style="background: linear-gradient(-45deg, #0927d8, #04befe); display: inline; -webkit-background-clip: text; -webkit-text-fill-color: transparent; border-bottom: 10px solid #ffda27;"
			class="cs-title">Contact</h2>
	</center>
	<br><br> <br><br><br><br><br><br>
	<?php
	include ('landingpart/footer.php');
	?>
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
	  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

  </script>
</body>
</html>