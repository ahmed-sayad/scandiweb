<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .container a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }

        .container a:hover {
            background-color: #e0e0e0;
        }

        .container .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 0 20px;
        }
        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="views/new/product_list.php">Product List</a>
        <div class="logo">Scandiweb Test</div>
        <a href="views/add-product.php">Add Product</a>
    </div>
    <footer>
        &copy; 2024 Ahmed Elsayad | Scandiweb Test
    </footer>
</body>
</html>

