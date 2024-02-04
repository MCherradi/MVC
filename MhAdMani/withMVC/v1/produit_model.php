<?php
    require_once './conn.php';

    $req = $conn->prepare('SELECT * FROM produit');
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
?>