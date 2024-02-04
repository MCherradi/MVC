<?php

    // Le controlleur c'est le chef d'orchestre qui manipule le model(communique avec la bd)
    // et intégre les données (s'ils sont demandées par l'utilisateur) dans la vue  qui sera afficher
    // comme rendu ou bien réponse à la requette de l'utilisateur
    require_once './produit_model.php';

    $dao = new Produit_model();
    // $result = $dao->getAllProducts();
    $result = $dao->getProductByName("o");

    require_once './produit_view.php';


