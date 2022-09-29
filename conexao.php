<?php
    $severname = "us-cdbr-east-06.cleardb.net";
    $username = "b4e937b2de77ed";
    $password = "bdd606a2";
    $bdname = "heroku_40942db28c6b952";

    // create conection
    $conn = new mysqli($severname, $username, $password, $bdname);

    // check conection
    if ($conn->connect_error) {
        die("Conection failed: " . $conn->connect_error);
    }
    // echo "Conected sucessfullly."
?>