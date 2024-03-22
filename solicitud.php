<?php
    require 'conexion.php';                                                                  //conexion con la base de datos
    session_start();
    $codigo_empleado = $_SESSION["codigo_empleado"];
    $nombre = "";
    $ApellidoP = "";
    $ApellidoM = "";
    $IDPuesto = "";


    try{
        $query ="SELECT Nombre, ApellidoP, ApellidoM, IDPuesto FROM personal WHERE IdPersonal = '$codigo_empleado'";
        $result = mysqli_query($conn, $query);
        if(!$result){ echo "Error de Conexion";}
        while($colums=mysqli_fetch_array($result) ){
            $nombre = $colums['Nombre'];
            $ApellidoP = $colums['ApellidoP'];
            $ApellidoM = $colums['ApellidoM'];
            $IDPuesto = $colums['IDPuesto'];
        }
        $nombre = $nombre." ".$ApellidoP." ".$ApellidoM;

    }catch(PDOException $e){echo "Error: " . $e->getMessage();}
    


    if($_POST){                                                                              //si se ha enviado el formulario 
        if(isset($_POST['enviar_solicitud'])){                                               //Comprobar si se ha pulsado el boton enviar solicitud

            $fecha_actual = $conn->real_escape_string($_POST['fecha_actual']);               //capturamos la fecha actual
            $fecha_solicitado = $conn->real_escape_string($_POST['fecha_solicitado']);       //capturamos la fecha actual
            $observaciones = $conn->real_escape_string($_POST['observaciones']);       //capturamos la fecha actual

            try{
            $query = "INSERT INTO solicitud VALUES (NULL, '$observaciones', '$fecha_actual', '$fecha_solicitado', '$codigo_empleado', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
                if($result=$conn->query($query)) { //Coprobamos si la insercion es correcta
                    ?> <h3 class="success">Tu registro se a acompletado</h3> <?php // mensaje de confirmacion
                }else{
                    ?> <h3 class="error">Registro no acompletado</h3> <?php // mensaje si no se pudo insertar
                }
            }catch(PDOException $e){echo "Error: " . $e->getMessage();}
            
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <!--<link rel="stylesheet" href="recursos.css">-->
    <link rel="icon" href="iconotecnm.ico">
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

        .container-form-register{
            width: 70% 30%;
            margin: 50px auto 0;
            text-align: justify;
            min-width: 400px;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 10); /* Fondo semi-transparente */
            opacity: 10;
            padding: 20px 20px;
            border-radius: 20px;
            background-blend-mode: lighten;
        }
        h1{
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
    <section class="container-form-register">
        <img src="diaseconomicos.jpg" width="400" alt="">
        <h1 class="row">Solicitud</h1>
        <form action="solicitud.php" method="post" class="form-grup">
            <label for="codigo_de_empleado" class="form-label">Código de empleado</label>
            <input class="controls form-control" type="text" name="codigo_de_empleado" id="codigo_de_empleado" value = "<?php echo $codigo_empleado; ?>" readonly>

            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="controls form-control" value = "<?php echo $nombre; ?>" readonly>

            <label for="puesto" class="form-label">Puesto</label>
            <select id="puesto" name="puesto" class="controls form-control" readonly>
                <?php 
                try{
                    $query2 ="SELECT IdPuesto, Descripcion FROM `puesto` WHERE IDPuesto = '$IDPuesto'";
                    $result = mysqli_query($conn, $query2);
                    if(!$result){ echo "Error de Conexion";}
                    while($colums=mysqli_fetch_array($result) ){
                        echo "<option value='".$colums['IdPuesto']."'>".$colums['Descripcion']."</option>\n";
                    }            
                }catch(PDOException $e){echo "Error: " . $e->getMessage();}
                ?>
            </select>

            <label for="fecha_actual" class="form-label">Fecha de Solicitud</label> 
            <input type="date" name="fecha_actual" id="fecha_actual" class="controls form-control" value="<?php echo date('Y-m-d'); ?>" readonly>

            <label for="fecha_solicitado" class="form-label">Fecha solicitada</label> 
            <input type="date" name="fecha_solicitado" id="fecha_solicitado" class="controls form-control" require>

            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="2" class="controls form-control"></textarea>
            <br>
            <br>

            <input class="botons-btn-btn-primary" type="submit" name="enviar_solicitud"  value="Enviar">
        </form>
    </section>

</body>
</html>