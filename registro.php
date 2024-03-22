<?php
    require 'conexion.php';                                                                  //conexion con la base de datos

    if($_POST){                                                                              //si se ha enviado el formulario y
        if(isset($_POST['Registrar'])){                                                      //Comprobar si se ha pulsado el boton Registrar
            if(
                strlen($_POST['codigo_empleado'] ) >= 1 &&                                   // Comprobamos que el codigo_empleado no este vacia 
                strlen($_POST['nombre'] ) >= 1 &&                                            // Comprobamos que el nombre no este vacio 
                strlen($_POST['apellido_paterno'] ) >= 1 &&                                  // Comprobamos que el apellido paterno no este vacio 
                strlen($_POST['apellido_materno'] ) >= 1 &&                                  // Comprobamos que el apellido materno no este vacio 
                strlen($_POST['contrasena'] ) >= 1                                           // Comprobamos que la contrasena no este vacio 
            ){
                $codigo_empleado = $conn->real_escape_string($_POST['codigo_empleado']);     //capturamos el codigo_empleado
                $nombre = $conn->real_escape_string($_POST['nombre']);                       //capturamos el nombre
                $Departamento = $conn->real_escape_string($_POST['Departamento']);           //capturamos el Departamento
                $apellido_paterno = $conn->real_escape_string($_POST['apellido_paterno']);   //capturamos el apellido paterno
                $apellido_materno = $conn->real_escape_string($_POST['apellido_materno']);   //capturamos el apellido materno
                $contrasena = $conn->real_escape_string($_POST['contrasena']);               //capturamos la  contrasena
                $puesto = $conn->real_escape_string($_POST['puesto']);                       //capturamos el puesto

                // insertamos el nuevo registro a la bas de datos

                try{
                    // realiza el query 
                    $query = "INSERT INTO `personal` (`IdPersonal`, `Nombre`, `ApellidoP`, `ApellidoM`, `Contrasena`, `IdDepartamento`, `IDPuesto`) VALUES (NULL, '{$nombre}', '{$apellido_paterno}', '{$apellido_materno}', '{$contrasena}', '1', '1');";
                    if($result=$conn->query($query)) { //Coprobamos si la insercion es correcta
                        ?> <h3 class="success">Tu registro se a acompletado</h3> <?php // mensaje de confirmacion
                    }else{
                        ?> <h3 class="error">Registro no acompletado</h3> <?php // mensaje si no se pudo insertar
                    }
                }catch(PDOException $e){echo "Error: " . $e->getMessage();}
                
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
    <title>Registro</title>
    <link rel="icon" href="iconotecnm.ico">
    <!--<link rel="stylesheet" href="recursos.css">-->
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
            width: 20% 30%;
            margin: 20px auto 0;
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
        <h4>Registro</h4>
        <form action="registro.php" method="post">
            <label for="codigo_empleado">Código de empleado</label>
            <input type="text" id="codigo_empleado" name="codigo_empleado" class="controls">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="controls">
            
            <label for="Departamento">Departamento</label>
            <select id="Departamento" name="Departamento" class="controls">
                <option value="1">Departamento 1</option>
                <option value="2">Departamento 2</option>
                <option value="3">Departamento 3</option>
            </select>

            <label for="apellido_paterno">Apellido paterno</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" class="controls">

            <label for="apellido_materno">Apellido materno</label>
            <input type="text" id="apellido_materno" name="apellido_materno" class="controls">

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" class="controls">

            <label for="puesto">Puesto</label>
            <select id="puesto" name="puesto" class="controls">
                <option value="1">Puesto 1</option>
                <option value="2">Puesto 2</option>
                <option value="3">Puesto 3</option>
            </select>
            <br>
            <br>

            <!-- <button type="submit" value="registrar" class="botons">Registrar</button> -->
            <input type="submit" value="Registrar" name="Registrar" class="botons"/>
            <br>
            <br>
            
            <p><a href="iniciarSesion.php">Iniciar Sesión</a></p>
        </form>
    </section>
</body>
</html>