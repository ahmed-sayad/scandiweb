<?php
require '../db.php';
require '../controllers/ProductController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $lenght = $_POST['length'];
    $weight = $_POST['weight'];
    
    $productController = new ProductController(new Product($pdo));
    $productController->createProduct($sku, $name, $price, $type, $size, $height, $width, $lenght, $weight);
    header('Location: new/product_list.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="stylesheet" href="../CSS/addProductStyle.css">
</head>
<body>
    <div class="container">
        <form id="product_form" method="POST">
                <h1>Product Add</h1>

            <label for="sku">SKU</label>
            <input type="text" id="sku" name="sku" required><br>
            
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="price">Price ($)</label>
            <input type="text" id="price" name="price" required><br>
            
            <label for="productType">Type Switcher</label>
            <select id="productType" name="type" onchange="changeForm()">
               <option value="">Type Switcher</option>
                <option value="DVD">DVD</option>
                <option value="Furniture">Furniture</option>
                <option value="Book">Book</option>
            </select>
            
            <div id="dynamic-form"></div>
            
            <div class="button-group">
                <button type="submit" value="Add Product" onclick="save">Save</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
    <footer>
        <hr style="width:99%;text-align:left;margin-left:0"><br>
        &copy; 2024 Ahmed Elsayad | Scandiweb Test
    </footer>
    <script src="../JS/add.js"></script>
</body>
</html>

