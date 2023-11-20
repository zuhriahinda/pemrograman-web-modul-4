<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// Deklarasikan objek class
$productConroller = new ProductController;

// Tampilkan hasil kembalian dari method getAllProduct menggunakan echo
echo $productConroller->getAllProduct();
