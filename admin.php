<?php

session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'admin') {
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

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

$adminName = "Admin";

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin Panel</title>
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
            background: #4caf50; /* Green color */
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

    <header>
        <div>
            <a href="#" class="logo">
                <i class="fas fa-shopping-basket"></i>Deliziosa Bakehouse
            </a>
            <div>
                <h1>Hello, <?php echo $adminName; ?></h1>
            </div>
        </div>
        <div>
            <button id="logout-btn" onclick="logout()">Logout</button>
        </div>
    </header>

    <div id="admin-form">
      <h2>Product Management Form</h2>
      <form action="insertProduct.php" method="post" enctype="multipart/form-data">
          <div class="input-box">
              <input type="text" name="productName" placeholder="Product Name" required>
          </div>
          <div class="input-box">
              <input type="number" name="productPrice" placeholder="Product Price" required>
          </div>
          <div class="input-box">
              <input type="text" name="productDescription" placeholder="Product Description" required>
          </div>
          <div class="input-box">
              <input type="file" name="productImage" accept="image/*" required>
          </div>

          <div class="input-box button">
              <input type="submit" id="add-product-btn" name="submit" value="Add Product">
          </div>
      </form>
    </div>

    <div id="product-list">
        <h2>Product List</h2>

        <?php

          echo "<table border='3'>";
          echo "<tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Action</th>
                </tr>";

          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>{$row['productID']}</td>";
              echo "<td>{$row['productName']}</td>";
              echo "<td>{$row['productPrice']}</td>";
              echo "<td>
                      <button class='update-btn' onclick='updateProduct({$row['productID']})'>Update</button>
                      <button class='delete-btn' onclick='deleteProduct({$row['productID']})'>Delete</button>
                    </td>";
              echo "</tr>";
          }

          echo "</table>";
        ?>

    </div>

    <script>
        function logout() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    window.location.replace("home.php");
                }
            };
            alert('Logout succeeded.');
            xhr.open("GET", "logout.php", true);
            xhr.send();
        }

        function updateProduct(productID) {
          window.location.href = `update.php?productID=${productID}`;
        }

        function deleteProduct(productID) {
          if (confirm('Are you sure you want to delete this product?')) {
              
              var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function () {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                      
                      window.location.reload();
                  }
              };
              xhr.open("POST", "deleteProduct.php", true);
              xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhr.send("productID=" + productID);
          }
        }


        function showAddForm() {
            alert('Show add product form');
        }
    </script>

</body>

</html>
