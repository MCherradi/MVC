<?php

    $db = "dcoding-notes_app";
    $server = "mysql:host=localhost;dbname=$db";
    $username = "root";
    $password = "";

    $conn = new PDO($server, $username, $password);

    // if($conn){
    //     echo "connected succesufelly !!!";
    // }else{
    //     echo "Ooops, error";
    // }
