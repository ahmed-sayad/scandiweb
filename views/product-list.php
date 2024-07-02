<?php
require '../db.php';
require '../controllers/ProductController.php';

$productController = new ProductController(new Product($pdo));
$products = $productController->listProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../CSS/listProductStyle.css">
    <title>Product List</title>
    </head>
<body>

<div class="container">
    <div class="header">
        <h1>Product List</h1>
        <div class="actions">
            <button onclick="window.location.href = 'add-product.php'">ADD</button>
            <button  id="delete-product-btn" type="button" onclick="deleteSelected()" >MASS DELETE</button>
        </div>
    </div>
    <hr style="width:100%;text-align:left;margin-left:0">
    <div class="product-list">
        <?php
        foreach ($products as $product): ?>
            <div class="product" id="product_list_form" method="POST" action="delete_products.php">
                
            <input type='checkbox' class='delete-checkbox' name='delete[]' value='" . $product["sku"] . "'>
                                    
                <table>
                    <tr><td><?= htmlspecialchars($product['sku']) ?></td></tr>
                    <tr><td><?= htmlspecialchars($product['name']) ?></td></tr>
                    <tr><td><?= htmlspecialchars($product['price']) ?> $</td></tr>
                    <?php if ($product['type'] == 'DVD'): ?>
                        <tr><td>Size: <?= htmlspecialchars($product['size'])?> MB</td></tr>
                    <?php elseif ($product['type'] == 'Book'): ?>
                        <tr><td>Weight: <?= htmlspecialchars($product['weight'])?> KG</td></tr>
                    <?php elseif ($product['type'] == 'Furniture'): ?>
                        <tr><td>Dimension:</td><td><?= htmlspecialchars($product['height']) ?>x<?= htmlspecialchars($product['width']) ?>x<?= htmlspecialchars($product['length']) ?></td></tr>
                    <?php endif; ?>
                </table>
            </div>
        <?php endforeach; ?>
    </div>   
</div>
        <script src="../JS/mass_delete.js"></script>

</body>
</html>



