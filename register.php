<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="images/logo.png">
    <title>Registration</title>
    <link rel="stylesheet" href="home.css">
    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }
      .wrapper {
        text-align: center;
      }
      form {
        width: 300px; /* Adjust the width as needed */
      }
    </style>
  </head>
  <body>

 
	
    <div class="wrapper">
      <h2>Registration</h2>
      <form  method ="post">
        <div class="input-box">
          <input type="text"  name ="username" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text"   name ="email" placeholder="Enter your email" required>
        </div>

        <div class="input-box">
          <input type="password"  name ="password"  placeholder="Create password" required >
        </div>
        <div class="input-box">
          <input type="password" name ="password" placeholder="Confirm password" required>
        </div>
        <div class="policy">
          <input type="checkbox">
          <h3>I accept all terms & conditions</h3>
        </div>
        <div class="input-box button">
          <input type="submit" name = "submit" value="Register Now">
        </div>
        <div class="text">
          <h3>Already have an account? <a href="login.php">Login now</a></h3>
        </div>
       
    

      </form>
    </div>
  </body>
  
  <?php
	if(isset($_POST["submit"])){
		$username = $_POST["username"];
		$email = $_POST["email"];
	
		$password = $_POST["password"];
	
		$connection = mysqli_connect("localhost", "root", "", "deliziosa");   
		
		if(!$connection){
			die ("Connection failed");
		} 
		$sql = "INSERT INTO register VALUES ('".$username."', '".$password."' ,'".$email."')";
		
	
		
		
		
		mysqli_close($connection);
		header("Location:login.php");
	}
	
	?>
	
</html>
