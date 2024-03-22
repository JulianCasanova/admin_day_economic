<?php
    // $conex = mysqli_connect("localhost" , "root", "", "dayadmin");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dayadmin";

    // Crear la conexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprovar la conexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>