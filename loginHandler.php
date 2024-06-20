<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "deliziosa";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_Cus = "SELECT * FROM customer WHERE customerEmail = '$email'";
        $sql_Admin = "SELECT * FROM admin WHERE adminName = '$email'";

        $result_Cus = mysqli_query($conn, $sql_Cus);
        $result_Admin = mysqli_query($conn, $sql_Admin);

        if ($result_Cus && mysqli_num_rows($result_Cus) > 0) {
            $row_Cus = mysqli_fetch_assoc($result_Cus);


            if ($password === $row_Cus['customerPassword']) {
                $_SESSION['user_type'] = 'customer';
                $_SESSION['user_id'] = $row_Cus['customerID'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: login.php");
            }
        } else if ($result_Admin && mysqli_num_rows($result_Admin) > 0) {
            $row_Admin = mysqli_fetch_assoc($result_Admin);

            
            if ($password === $row_Admin['adminPassword']) {
                $_SESSION['user_type'] = 'admin';
                $_SESSION['user_id'] = $row_Cus['adminID'];
                header("Location: admin.php");
                exit();
            } else {
                echo "Incorrect password2.";
            }
        } else {
            echo "User not found.";
        }
    }
}

mysqli_close($conn);
?>
