<?php

    require_once './produit_model.php';

    class Produit_controller{

        function getAllProducts(){
            $dao = new Produit_model();
            $result = $dao->getAllProducts();
            require_once './produit_view.php';
        }

        function getProductByName(){
            $dao = new Produit_model();
            $result = $dao->getProductByName("o");
            require_once './produit_view.php';
        }
    }