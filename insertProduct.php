<?php
include('dbConnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['productName']);
    $price = mysqli_real_escape_string($conn, $_POST['productPrice']);
    $description = mysqli_real_escape_string($conn, $_POST['productDescription']);

    // Check file type
    $imageFileType = strtolower(pathinfo($_FILES["productImage"]["name"], PATHINFO_EXTENSION));
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif");

    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "<script>alert('Invalid file type. Allowed types: jpg, jpeg, png, gif');</script>";
    } else {
        $targetDir = "upload/";

        // Ensure the 'upload' directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $targetFile = $targetDir . uniqid() . '_' . basename($_FILES["productImage"]["name"]);

        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            $sql = "INSERT INTO `product` (`productName`, `productPrice`, `productDetails`, `productImage`) VALUES ('$name', '$price', '$description', '$targetFile');";

            if (mysqli_query($conn, $sql)) {
                header("Location: admin.php");
                echo "<script>alert('Product Added Successfully!');</script>";

            } else {
                echo "<script>alert('Failed to add product to the database, Try Again!');</script>";
                header("Location: admin.php");
            }
        } else {
            echo "<script>alert('Failed to upload image, Try Again!');</script>";
            header("Location: admin.php");
        }
    }
}

mysqli_close($conn);
?>
