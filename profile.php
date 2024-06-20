<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'customer') {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "deliziosa";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$customerID = $_SESSION['user_id'];

$sql = "SELECT customerName FROM customer WHERE customerID = '$customerID'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $customerName = $row['customerName'];
} else {
    $customerName = "Guest";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="home.css"> 
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #cc6035;
        }

        .content {
            text-align: center;
            color: #fff;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        #logout-btn {
            background: #d98766; 
            color: #fff; 
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.5rem;
            transition: background 0.3s ease;
        }

        #logout-btn:hover {
            background: #aa623f; 
        }
    </style>
</head>

<body>

    <header class="header"><a href="#" class="logo">
            <i class="fas fa-shopping-basket"></i>Deliziosa Bakehouse
        </a>
        <nav class="navbar">
            <a href="home.php" active>home</a>
            <a href="item.php">menu</a>
            <a href="about.php">about</a>
            <a href="contactUs.php">Contact Us</a>

        </nav>
        <div class="icons-test">

            <div id="menu-btn" class="fas fa-bars"></div>

            <a href="addToCart.php" alt=""><div id="cart-btn" class="fas fa-shopping-cart"></div></a>
            <a href="<?php echo isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'customer' ? 'profile.php' : 'login.php'; ?>" alt="">
                <div id="login-btn" class="fas fa-user"></div>
            </a>

        </div>
    </header>

    <div class="content">
        <h1>Hello, <?php echo $customerName; ?></h1>
        <button id="logout-btn" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            // AJAX request
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    
                    window.location.replace("home.php");
                }
            };
            alert('Logout succeeded.');
            xhr.open("GET", "logout.php", true);
            xhr.send();
        }

    </script>



</body>

</html>
