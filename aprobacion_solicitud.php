<?php
    require 'conexion.php';                                                                  //conexion con la base de datos

    $id=1;

    $codigo_empleado = "";
    $nombre = "";
    $ApellidoP = "";
    $ApellidoM = "";
    $fecha_solicitado="";

    try{
        $query ="SELECT IdPersonal, FechaSolicitada FROM solicitud WHERE IdSolicitud = '$id'";
        $result = mysqli_query($conn, $query);
        if(!$result){ echo "Error de Conexion";}
        while($colums=mysqli_fetch_array($result) ){
            $codigo_empleado = $colums['IdPersonal'];
            $fecha_solicitado = $colums['FechaSolicitada'];
        }
    }catch(PDOException $e){echo "Error: " . $e->getMessage();}

    try{
        $query2 ="SELECT Nombre, ApellidoP, ApellidoM FROM personal WHERE IdPersonal = '$codigo_empleado'";
        $result = mysqli_query($conn, $query2);
        if(!$result){ echo "Error de Conexion";}
        while($colums=mysqli_fetch_array($result) ){
            $nombre = $colums['Nombre'];
            $ApellidoP = $colums['ApellidoP'];
            $ApellidoM = $colums['ApellidoM'];
        }
        $nombre = $nombre." ".$ApellidoP." ".$ApellidoM;

    }catch(PDOException $e){echo "Error: " . $e->getMessage();}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos.css">
    <title>Aprobacion</title>
</head>
<body>
    <section class="container form-register">
        <!-- <h1 class="row"></h1> -->
        <form action="aprobacion_solicitud.php" method="post" class="form-grup">
            <label for="codigo_de_empleado" class="form-label">Código de empleado</label>
            <input class="controls form-control" type="text" name="codigo_de_empleado" id="codigo_de_empleado" value = "<?php echo $codigo_empleado; ?>" readonly>

            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="controls form-control" value = "<?php echo $nombre; ?>" readonly>

            <label for="fecha_solicitado" class="form-label">Fecha solicitada</label> 
            <input type="date" name="fecha_solicitado" id="fecha_solicitado" class="controls form-control" value = "<?php echo date('Y-m-d',strtotime($fecha_solicitado)); ?>" readonly>

            <label for="contrasena" class="form-label">Contraseña</label>
            <input class="controls form-control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">

            <input class="btn btn-primary" type="submit" value="Aprobar">
            <input class="btn btn-primary" type="submit" value="Rechazar">
            <!-- <p><a [routerLink]="['/registro']">Registrar</a></p> -->
        </form>
    </section>
</body>
</html>