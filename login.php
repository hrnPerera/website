


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="images/logo.png">
    <title>Login</title>
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
    </style>
  </head>
  <body>

  <?php
	if(isset($_GET["btnsubmit"])){
		$username = $_REQUEST["usernamename"];
		$password = $_REQUEST["password"];
		
		$conn = mysqli_connect("localhost", "root","", "deliziosa", );
		
		if(!$conn){
			die("No database Connection");
		}
		
		$sql= "SELECT * FROM login WHERE password = '".$password."' AND name = '".$username."'";
		echo($sql);
		$result= mysqli_query($conn, $sql);
	
		
		if(mysqli_num_rows($result)>0){

      $row=$result->fetch_assoc();
			$_SESSION["userEmail"]=$row['email'];
			header("Location:home.php");
		}
		else{
			header("Location:register.php");
		}
	}
	?>
    <div class="wrapper">
      <h2>Login</h2>
      <form method ="post" action="">
        <div class="input-box">
          <input type="text" placeholder="Username" class="form-control" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" class="form-control" required>
        </div>
        <div class="input-box button">
          <input type="submit" value="Login">
        </div>
        
      </form>
      <div class="text">
        <h4>Don't have an account? <a href="register.php">Sign up now</a></h4>
      </div>
    </div>
  </body>
</html>
