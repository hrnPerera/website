DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<title>Deliziousa</title>
		<!--font awsome code link-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<!--customer css file link-->

		<link rel="stylesheet" href="home.css">
	
		<!--customer jsfile-->
		<script src="main.js"></script>
		
	</head>
	<body>
		<!--header section start page-->
		<header class="header"><a href="#" class="logo">
			 <i class="fas fa-shopping-basket"></i>Deliziosa 
Bakehouse </a>
			<nav class="navbar">
				<a href="home.php" active>home</a>
				<a href="item.php">menu</a>
				<a href="about.php">about</a>
                <a href="contactUs.php">Contact Us</a>
				
			</nav>
			<div class="icons-test">

				<div id="menu-btn" class="fas fa-bars"></div>
				
				<a href="addToCart.php" alt=""><div id="cart-btn" class="fas fa-shopping-cart"></div></a>
				<a href="login.php" alt=""><div id="login-btn" class="fas fa-user" ></div></a>
		
			</div>
			
			
		
		</header>
	
		<!--home section start-->

	<section class="home" id="home">
		<div class="slides-container">
			<div class="slide active">
                <div class="img">
					<img src="img/cake1.png" alt="">
				</div>
				<div class="content">
					<span>Have a Cake-A-Licious</span>
					<h3>upto 50% off</h3>
					<a href="#" class="btn">shop now</a>
				</div>
			</div>
			
		
				<div class="slide">	
                    <div class="img">
						<img src="img/bun1.png" alt="">
					</div>		
					<div class="content">
						<span>Have a Cake-A-Licious</span>
						<h3>upto 50% off</h3>
						<a href="#" class="btn">shop now</a>
					</div>	
				</div>
			
						
				<div class="slide">	
                    <div class="img">
						<img src="img/waffels.png" alt="">
					</div>		
					<div class="content">
						<span>Have a Cake-A-Licious</span>
						<h3>upto 50% off</h3>
						<a href="#" class="btn">shop now</a>
					</div>
				</div>	
		</div>

        <script type="text/javascript">
            let slideIndex = 0;
            showSlides();
            function showSlides()
            {
            let i;
            let slides = document.getElementsByClassName("slide");
            for (i = 0; i < slides.length; i++)
            {
               slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length)
               {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 5000); //Change image every 5 seconds
            }
        </script>

	</section>
		<br><br><br><br><br>
    <h1 align ="center">Special discounts for the week</h1><br><br><br>
	<section class="banner-container">
        
		<div class="banner">
			<img src="img/cupcake.png" alt="">
			<div class="content">
			<span>limited scales</span>
			<h3>upto 20% off</h3>
			<a href="#" class="btn">shop now</a>
		</div>
		</div>
		
		
		<div class="banner">
			<img src="img/donuts.png" alt="">
			<div class="content">
			<span>limited scales</span>
			<h3>upto 20% off</h3>
			<a href="#" class="btn">shop now</a>
		</div>
		</div>
			
			
		<div class="banner">
			<img src="img/pretzels.jpg" alt="">
			<div class="content">
			<span>limited scales</span>
			<h3>upto 20% off</h3>
			<a href="#" class="btn">shop now</a>
		</div>
		</div>
		</section>
	
	
	
<div class="space"></div>

<!--footer section start-->

		<section class="footer">
			<div class="box-container">
			<div class="box">
				<h3> quick links</h3>
				<a href ="#">Home</a>
				<a href="home.php" ><i class="fas fa-arrow-right"></i>home</a>
				<a href="item.php"><i class="fas fa-arrow-right"></i>menu</a>
				<a href="about.php"><i class="fas fa-arrow-right"></i>about</a>
				<a href="contactUs.php"><i class="fas fa-arrow-right"></i>Contact Us</a>
			</div>



			<div class="box">
				<h3>follow us</h3>
				<a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
				<a href="#"> <i class="fab fa-twitter"></i> twitter </a>
				<a href="#"> <i class="fab fa-instagram"></i> instagram </a>
				<a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
			</div>
			<div class="box">
				<h3>nexsletter</h3>
				<p>subscribe for latest update</p>
				<form action=""></form>
				<input type="email" placeholder="enter your email address">
				<input type="submit" value="subscribe" class="btn">
			</form>
				<img src="img/payment.png" class="payments" alt="">
			</div>
			</div>
		</section>

</body>
	
</html>