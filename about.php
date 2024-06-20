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
        <!--end of the header-->
        <br><br><br><br><br><br><br>
       
        <!--about section start-->

        <div class="heading">
            <h1>about us</h1>
        </div>


        <section class ="about">
            <div class="img">
                <img src="img/shop.jpg" alt="">
            </div>

            <div class="content">
                <span>welcome to our products</span>
                <h3>Cake-A-Licious products</h3>
                 <p>Welcome to Deliziousa bakehouse where you can find freshly baked goods fills the air and sweet memories are created daily. Our story begins with a passion for baking and a commitment to providing our community with the finest treats and delights.
                At Deliziousa bakehouse, we take pride in crafting delicious and beautiful confections that delight the senses. Our talented bakers and pastry chefs use the finest ingredients, traditional recipes, and a sprinkle of creativity to bring you a wide range of mouthwatering delights.
                Our dedication to quality is reflected in every product we offer. From artisanal bread and decadent pastries to custom-designed cakes for your special occasions, we infuse each creation with love and care, ensuring that every bite is a moment of pure joy.</p>
                    <a href="#" class="btn">read more</a>
            
            </div>
        </section>

        <!--review section start-->

        <section class="review">
            <div class="box">
                <div class="user">
                    <img src="img/Head Baker.jfif" alt="">
                    <div class="info">
                        <h3 class="card-title">H.N.R. Perera</h3>
                        <span class="card-text">Head Baker</span>
                        <p>Meet our Head Baker, H.N.R. Perera. A master of sweet and savory, crafting delightful baked goods with passion and expertise.</p>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="img/Pastry.jfif" alt="">
                    <div class="info">
                        <h3 class="card-title">J.R. Perera</h3>
                        <span class="card-text">Pastry Chef</span>
                        <p>Introducing our Pastry Chef, J.R. Perera, a connoisseur of sweet indulgence, crafting exquisite pastries with precision and creativity.</p>
                   </div>
                </div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="img/cake1.jfif" alt="">
                    <div class="info">
                        <h3 class="card-title">B.D.S. Perera</h3>
                        <span class="card-text">Cake Artist</span>
                        <p>Meet our Cake Artist, B.D.S. Perera, a visionary of edible art, sculpting delightful cakes that are as beautiful as they are delicious.</p>
                    </div>
                </div>
            </div>
        </section>


      

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