<?php 
    $servername = "sql308.thsite.top";
    $username = "thsi_38097507";
    $password = "************";

    $conn = new mysqli ($servername, $username, $password);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    echo "Conexión exitosa!";
?>