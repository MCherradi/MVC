<?php

    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if($controller == "produit"){
        if($action == "f1"){
            require_once("./produit_controller_v2.php");
            $cntrl = new Produit_controller();
            $cntrl->getAllProducts();
        }elseif($action == "f2"){
            require_once("./produit_controller_v2.php");
            $cntrl = new Produit_controller();
            $cntrl->getProductByName("o");
        }
    }