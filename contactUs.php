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
       
<div class="heading">
    <h1>Contact us</h1>
</div>


<section class="contact">
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+94 111 2223</p>
            <p>+94 333 4445</p>
        </div>

                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>our email</h3>
                    <p>deliziousa@gmail.com</p>
                    <p>the_bakehouse@gmail.com</p>
                </div>


                        <div class="icons">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>our address</h3>
                            <p>Kollupitiya, Sri Lanka</p>
                        </div>
    </div>

    <div class="row">
        <form action="">
            <h3> get in touch </h3>
            <div class="inputbox">
                <input type="text" placeholder="Enter your name :" class="box">
                <input type="text" placeholder="Enter your email :" class="box">
            </div>

            <div class="inputbox">
                <input type="text" placeholder="Enter your number :" class="box">
                <input type="text" placeholder="Enter your subject :" class="box">
            </div>
            
            <textarea placeholder="your message " cols="30" rows="10"></textarea>
            <input type="submit" value="send message " class="btn">
            
        </form>
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