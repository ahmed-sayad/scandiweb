<?php
class Product {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProducts() {
        $stmt = $this->pdo->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }

    public function addProduct($sku, $name, $price, $type, $size, $height, $width, $lenght, $weight) {
        $stmt = $this->pdo->prepare('INSERT INTO products (sku, name, price, type, size, height, width, length, weight) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$sku, $name, $price, $type, $size, $height, $width, $lenght, $weight]);
    }
}
?>
