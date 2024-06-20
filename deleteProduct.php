<?php
include('dbConnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productID = mysqli_real_escape_string($conn, $_POST['productID']);


    $sql = "DELETE FROM `product` WHERE `productID`='$productID'";

    if (mysqli_query($conn, $sql)) {
        echo "Product Deleted Successfully!";
    } else {
        echo "Failed to delete product, Try Again!";
    }
} else {
    echo "Invalid request";
}

mysqli_close($conn);
?>
