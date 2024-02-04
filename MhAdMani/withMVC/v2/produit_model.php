<?php
    require_once './conn.php';

    class Produit_model {

        function getAllProducts(){
            global $conn;
            $req = $conn->prepare('SELECT * FROM produit');
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        function getProductByName($name){
            global $conn;
            $req = $conn->prepare("SELECT * FROM produit WHERE name LIKE '%$name%'");
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

    // $dao = new Produit_model();
    // $dao->getAllProducts();

?>