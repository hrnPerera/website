<?php
include('dbConnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productID = mysqli_real_escape_string($conn, $_POST['productID']);
    $name = mysqli_real_escape_string($conn, $_POST['productName']);
    $price = mysqli_real_escape_string($conn, $_POST['productPrice']);
    $description = mysqli_real_escape_string($conn, $_POST['productDescription']);


    $sql = "UPDATE `product` SET `productName`='$name', `productPrice`='$price', `productDetails`='$description' WHERE `productID`='$productID'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Successfully Updated!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Failed to update product, Try Again!');</script>";
    }
} else {
    echo "<script>alert('Invalid request!');</script>";

}

mysqli_close($conn);
?>
