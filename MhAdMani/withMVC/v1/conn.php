<?php
    $db = "dcoding-notes_app";
    $server = "mysql:host=localhost;dbname=$db";
    $username = "root";
    $mdp = "";

    $conn = new PDO($server, $username, $mdp);
    // if($conn) {
    //     echo "connected successufelly !!!";
    // }else{
    //     echo "Ooops, Error";
    // }