<?php

    require_once './product_model.php';


    class Product_controller_v2{

        function getAllProducts(){
            $dao = new Product_model();
            $result = $dao->getAllProducts();
            require_once './product_view.php';
        }

        function getProductByName(){
            $dao = new Product_model();
            $result = $dao->getProductByName('o');
            require_once './product_view.php';
        }
    }