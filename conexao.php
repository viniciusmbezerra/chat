<?php
    $severname = "localhost:3306";
    $username = "root";
    $password = "admin";
    $bdname = "chat";

    // create conection
    $conn = new mysqli($severname, $username, $password, $bdname);

    // check conection
    if ($conn->connect_error) {
        die("Conection failed: " . $conn->connect_error);
    }
    // echo "Conected sucessfullly."
?>
