<?php
include('dbConnection.php');


if (isset($_GET['productID'])) {
    $productID = mysqli_real_escape_string($conn, $_GET['productID']);

    $sql = "SELECT * FROM `product` WHERE `productID`='$productID'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $productName = $row['productName'];
        $productPrice = $row['productPrice'];
        $productDescription = $row['productDetails'];
    } else {
        echo "Product not found";
        exit();
    }
} else {
    echo "ProductID not provided";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #cc6035;
            padding: 10px 20px;
            width: 100%;
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

        #admin-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        #product-list {
            margin-top: 40px;
            color: #fff;
            font-size: 1.5rem;
            text-align: center;
        }

        .product-row {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin: 10px 0;
            background: #734f2d; 
            border-radius: 5px;
        }

        .update-btn {
            background: #e3c84d;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .update-btn:hover {
            background: #b69e35; 
        }

        .delete-btn {
            background: #e74c3c; 
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .delete-btn:hover {
            background: #b33125; 
        }

        #add-product-btn {
            background: #4caf50; 
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.5rem;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        #add-product-btn:hover {
            background: #45a049; 
        }
    </style>

</head>
<body>

    <h2>Update Product</h2>

    <form action="updateProduct.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="productID" value="<?php echo $productID; ?>">
        <div class="input-box">
            <input type="text" name="productName" placeholder="Product Name" value="<?php echo $productName; ?>" required>
        </div>
        <div class="input-box">
            <input type="number" name="productPrice" placeholder="Product Price" value="<?php echo $productPrice; ?>" required>
        </div>
        <div class="input-box">
            <input type="text" name="productDescription" placeholder="Product Description" value="<?php echo $productDescription; ?>" required>
        </div>
        <div class="input-box button">
            <input type="submit" name="submit" value="Update Product">
        </div>
    </form>


</body>
</html>
