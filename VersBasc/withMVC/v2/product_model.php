<?php

    require_once './conn.php';

    class Product_model{

        function getAllProducts(){
            global $conn;
            $req = $conn->prepare('SELECT * FROM produit');
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            return $result;
        }

        
        function getProductByName($name){
            global $conn;
            $req = $conn->prepare("SELECT * FROM produit WHERE name LIKE '%$name%'");
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            return $result;
        }

    }

?>