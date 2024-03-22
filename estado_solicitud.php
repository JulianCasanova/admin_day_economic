<?php
    require 'conexion.php';                                                                  //conexion con la base de datos
    $codigo_empleado = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconotecnm.ico">
    <title>Estado de Solicitud</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        }
        body {
            background-image: url('fondo.jpg'); /*se utiliza para mostrar una
            background-size: cover; /* Cubre todo el fondo */
            background-position: center; /* Centra la imagen */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-register {
            width: 50% 30%;
            margin: 130px auto 0;
            text-align: justify;
            min-width: 400px;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 10); /* Fondo semi-transparente */
            opacity: 10;
            padding: 20px 20px;
            border-radius: 20px;
            background-blend-mode: lighten;
        }
        h4{
            font-family: 'Times New Roman';
            font-size: 40px;
            text-align: center;
        }

        form {
            padding: 30px 15px;
            border-radius: 10px;

        }

        label {
            display: block;
            margin-bottom: 15px;
            font-weight: top;
            font-family: 'Cambria';
            font-size: 20px;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
    </style>
</head>
<body>
    <section class="form-register">
        <img src="diaseconomicos.jpg" width="400" alt="">
        <h4 class="row">Estado de la solicitud</h4>
        <form action="/submit-login" method="post" class="form-grup">
            <label for="codigo_de_empleado" class="form-label">Código de empleado</label>
            <input class="controls form-control" type="text" name="codigo_de_empleado" id="codigo_de_empleado" placeholder="Código de empleado">

            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="controls form-control">

            <label for="fecha-solicitado" class="form-label">Fecha solicitada</label> 
            <input type="date" name="fecha-solicitado" id="fecha-solicitado" class="controls form-control">

            <label for="Estado" class="form-label">Estado</label>
            <input type="text" id="Estado" name="Estado" class="controls form-control">

        </form>
    </section>
</body>
</html>