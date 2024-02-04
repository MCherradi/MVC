<?php

    require_once './product_model.php';

    $dao = new Product_model();
    // $result = $dao->getAllProducts();
    $result = $dao->getProductByName("o");

    require_once './product_view.php';