<?php
require_once '../models/Product.php';

class ProductController {
    private $productModel;

    public function __construct($productModel) {
        $this->productModel = $productModel;
    }

    public function listProducts() {
        return $this->productModel->getAllProducts();
    }

    public function createProduct($sku, $name, $price, $type, $size, $height, $width, $lenght, $weight) {
        $this->productModel->addProduct($sku, $name, $price, $type, $size, $height, $width, $lenght, $weight);
    }
}
?>
