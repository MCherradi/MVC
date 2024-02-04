<?php

    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if ($controller == 'product') {
        if($action=="f1"){
            require_once './product_controller_v2.php';
            $con = new Product_controller_v2();
            $con->getAllProducts();
        }elseif($action== 'f2'){
            require_once './product_controller_v2.php';
            $con = new Product_controller_v2();
            $con->getProductByName("o");
        }
    }