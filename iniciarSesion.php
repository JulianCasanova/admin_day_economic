<?php
    require 'conexion.php';                                                                              //conexion con la base de datos 
    session_start();                                                                                     //iniciar sesión

    if($_POST){                                                                                          //si se ha enviado el formulario y
        if(isset($_POST['iniciar_sesion'])){                                                             //Comprobar si se ha pulsado el boton iniciar sesion
            if(
                strlen($_POST['codigo_de_empleado'] ) >= 1 &&                                             // Comprobamos que el codigo de empleado no este vacia 
                strlen($_POST['contrasena'] ) >= 1 //&&                                                   // Comprobamos que la contraseña no este vacia 
            ){
                try{
                    $codigo_empleado = $conn->real_escape_string($_POST['codigo_de_empleado']);            //capturamos el codigo_empleado
                    $contrasena = $conn->real_escape_string($_POST['contrasena']);                         //capturamos la  contrasena

                    // Consultar a la base de datos si el usuario existe
                    $sql = "SELECT Contrasena FROM personal WHERE IdPersonal = '$codigo_empleado' AND Contrasena = '$contrasena'";
                    $resultado = mysqli_query($conn, $sql);

                    // Si la consulta encontró un usuario
                    if (mysqli_num_rows($resultado) > 0) {
                        // Iniciar la sesión del usuario
                        $_SESSION["codigo_empleado"]=$codigo_empleado;
                        $_SESSION['autenticado'] = true;
                        echo "Inicio de sesión exitoso.";

                        // Redirigir al usuario a la página principal
                        header('Location: solicitud.php');
                    } else {
                        // Mostrar un mensaje de error
                        echo '<p class="error">Usuario o contraseña incorrectos.</p>';
                    }

                }catch(PDOException $e){
                    echo "Error: " . $e->getMessage();
                }
                

                $conn->close();// cerrar la conexión
            }else{
                ?> <h3 class="error">Llenar todo los campos</h3><?php // mensaje si los campos estan vacios
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconotecnm.ico">
    <!--<link rel="stylesheet" href="recursos.css">-->
    <title>Iniciar Sesión</title>
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
        <h4>Iniciar Sesión</h4>
        <form action="iniciarSesion.php" method="post">
            <label for="codigo_de_empleado">Código de empleado</label>
            <input class="controls" type="text" name="codigo_de_empleado" id="codigo_de_empleado" placeholder="Código de empleado">

            <label for="contrasena">Contraseña</label>
            <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
            <br>
            <br>

            <input class="botons" type="submit" value="Iniciar Sesión" name="iniciar_sesion">
            <br>
            <br>
            <p><a href="registro.php">Registrar</a></p>
        </form>
    </section>
</body>
</html>