<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Product List</h1>
        <div class="buttons">
            <button type="button" onclick="window.location.href='../add-product.php'">ADD</button>
            <button id="delete-product-btn" type="button" onclick="deleteSelected()">MASS DELETE</button>
        </div>
    </div>
        <hr style="width:100%;text-align:left;margin-left:0">
    <form id="product_list_form" method="POST" action="delete_products.php">
        <div class="product-list">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "scandiweb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, sku, name, price, type, size, height, width, length, weight FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product-item'>";
                    echo "<input type='checkbox' class='delete-checkbox' name='delete[]' value='" . $row["id"] . "'>";
                    echo "<p>" . $row["sku"] . "</p>";
                    echo "<p>" . $row["name"] . "</p>";
                    echo "<p>" . $row["price"] . " $</p>";
                    if ($row["size"] != null){
                        echo "<p>Size: " . $row["size"] . " MB</p>";
                    } else if ($row["height"] != null && $row["width"] =! null && $row["length"] != null){
                        echo "<p>Dimention: " . $row["height"] . "x" . $row["width"] ."x" . $row["length"] . "</p>";
                    } else if ($row["weight"] != null){
                        echo "<p>Weight: " . $row["weight"] . "KG" . "</p>";
                    }
                                
                    echo "</div>";
                }
            } else {
                echo "No products found";
            }
            $conn->close();
            ?>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>
