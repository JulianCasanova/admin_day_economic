<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconotecnm.ico">
    <title>Pagina Principal</title>
    <style>

* {
    margin: 0;
    padding: 0;
}

body {
  font-family: Arial, sans-serif; /* Utiliza una fuente legible */
  background-color: #f0f0f0; /* Color de fondo */
  margin: 0px 40px; /* Elimina los márgenes predeterminados */
  padding: 0px; /* Añade un relleno alrededor del cuerpo */
  background-color: white;
}

.logo{
    background-color: #173878;
    background-position: top; /* Hace que el color de fondo comience desde arriba */
    padding: 20px; /* Añadir espacio alrededor del contenido principal */
}
.imagen{
    width: 120px; /* Establece el ancho deseado */
    height: auto; /* Mantén la proporción de aspecto original */
    margin-right: 20px; /* Espacio a la derecha de la imagen */
    margin-left: 80px; /* Centra la imagen horizontalmente */
    margin-right: auto; /* Centra la imagen horizontalmente */
    
}

.logo2{
    background-color: white;
}
.ajustar{
  width: 150px; /* Establece el ancho deseado */
  height: auto; /* Mantén la proporción de aspecto original */
  margin-right: 20px; /* Espacio a la derecha de la imagen */
  margin-left: 90px; /* Centra la imagen horizontalmente */
  margin-right: auto; /* Centra la imagen horizontalmente */

}

.menu {
    text-align: center; /* Centra los botones horizontalmente */
    margin-top: 20px; /* Espacio entre el encabezado y el menú */
    display: inline;
    float: right;
}
.quitar {
    display: inline-block; /* Hace que los botones se muestren en línea */
    padding: 10px 20px; /* Añade espacio interno a los botones */
    margin: 0 10px; /* Espacio entre los botones */
    font-size: 16px; /* Tamaño del texto */
    text-decoration: none; /* Quita el subrayado de los enlaces */
    color: black; /* Color del texto */
    border-radius: 5px; /* Bordes redondeados */
    transition: background-color 0.3s, color 0.3s; /* Efecto de transición */
 }

.quitar:hover {
    background-color: #0056b3; /* Cambia el color de fondo al pasar el ratón */
    color: #fff; /* Cambia el color del texto al pasar el ratón */
}

/*aca empeza abajo del encabezado*/
mi{
    width: 70%;
}

.slider {
    width: 70%; /* Ancho del slider */
    margin: auto; /* Centrar horizontalmente */
    overflow: hidden;
}

.slider ul {
    display: flex;
    padding: 0;
    width: 400%;
    animation: automatico 10s infinite alternate linear;
}

.slider li {
    width: 100%; /* Ajusta el ancho de los elementos de lista */
    list-style: none;
}

.slider img {
    width: 100%; /* Ajusta el ancho de las imágenes al 100% del contenedor */
}

.mov {
    width: 50%;
}

@media(min-width: 700px) {
    .slider img {
        height: 400px; 
    }
}

@keyframes automatico {
    0% {margin-left: 0;}
    20% {margin-left: 0;}
    25% {margin-left: -100%;}
    45% {margin-left: -100%;}
    50% {margin-left: -200%;}
    70% {margin-left: -200%;}
    75% {margin-left: -300%;}
    100% {margin-left: -300%;}
}

h1{
    text-align: center;
}
.parra{
    width: 80%; /* Ajusta el ancho del párrafo según sea necesario */
    text-align: center; /* Justifica el texto dentro del párrafo */
    margin-left: auto; /* Margen izquierdo automático */
    margin-right: auto; 
    padding: 0;
}
.contenedor {
  display: flex;
  justify-content: center;
}

.lista {
  list-style: none;
  padding: 0;
  width: 50%; /* Ajusta el ancho de la lista según sea necesario */
}

.lista li {
  text-align: left;
  margin-bottom: 10px; /* Espacio entre elementos de la lista */
}

.encabezado {
        display: flex;
        flex-wrap: wrap; /* Permite que los elementos se envuelvan cuando no hay suficiente espacio */
        justify-content: space-between;
        align-items: center;
        background-color: #173878;
        padding: 20px;
    }

    .encabezado div {
        flex-basis: 100%; /* Cada div ocupa toda la anchura disponible */
        margin-bottom: 10px; /* Agrega un espacio entre los elementos */
    }

    h4, p {
        margin: 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    iframe {
        border: 0;
        width: 100%; /* El mapa se ajusta al ancho del contenedor */
        max-width: 350px; /* Establece un ancho máximo para el mapa */
        height: auto; /* La altura se ajusta automáticamente para mantener la relación de aspecto */
    }

    @media screen and (min-width: 768px) {
        .encabezado div {
            flex-basis: auto; /* Restaura el comportamiento predeterminado en pantallas más grandes */
        }

        .mapa {
            order: 3; /* Cambia el orden del elemento para que se alinee a la derecha */
        }
    }
</style>
</head>
<header class="logo">
    <img class="imagen" src="logoGobMx.png" alt="logo de méxico">
</header>

<header class="logo2">
    <img class="ajustar" src="pleca-GobMx.png" alt="logo de méxico">
    <img class="ajustar" src="pleca-Educ.png" alt="logo de méxico">
    <img class="ajustar" src="pleca-TecNM.png" alt="logo de méxico">
    <img class="ajustar" src="pleca-ITVE.png" alt="logo de méxico">
    <div class="menu">
        <a class="quitar" href="pagina_principal.php" title="PaginaPrincipal">Página Principal</a>
        <a class="quitar" href="registro.php">Registrar</a>
        <a class="quitar" href="iniciarSesion.php" title="IniciarSesion">Iniciar Sesión</a>
    </div>
</header>
<body>
<main class="mi"> 
    <div class="slider">
        <ul>
            <li><img class="mov" src="principalmovimiento/fondoo.jpg" alt=""></li>
            <li><img class="mov" src="principalmovimiento/ingenierias.png" alt=""></li>
            <li><img class="mov" src="principalmovimiento/instituto.jpg" alt=""></li>
            <li><img class="mov" src="principalmovimiento/tecm.png" alt=""></li>
        </ul>
    </div>

    <h1>Dias Economicos del Tecnologico Nacional De México</h1>
    <p  class="parra" id="parrafo" >De acuerdo con la Ley Federal del Trabajo las fechas de descanso obligatorio para las personas trabajadoras en 2024 son:
       
        <div class="contenedor">
            <ul class="lista">
                <li>Lunes 1 de enero por Año Nuevo.</li>
                <br>
                <li>Lunes 5 de febrero por el aniversario de la Constitución.</li>
                <br>
                <li>Lunes 18 de marzo por el natalicio de Benito Juárez.</li>
                <br> 
                <li>Lunes 18 de marzo por el natalicio de Benito Juárez.</li>
                <br>
                <li>Domingo 2 de junio por la Jornada Electoral.</li>
                <br>
                <li>Lunes 16 de septiembre por el aniversario de la Independencia.</li>
                <br>
                <li>Martes 1 de octubre por la transición del Poder Ejecutivo.</li>
                <br>
                <li>Lunes 18 de noviembre en conmemoración de la Revolución.</li>
                <br>
                <li>Miércoles 25 de diciembre por Navidad.</li>

            </ul>
           
        </div>   
        
    </p>

    <footer class="encabezado">
        <div>
            <h4>Dirección</h4>
            <p>Km.41+400, Muna-Felpie Carrillo Puerto</p>
        </div>
        <div>
            <h4>Contacto</h4>
            <p>Email: tecnologico@suryucatan.tecnm.mx</p>
            <p>Teléfono: 997 975 21 84</p>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14969.074425372388!2d-89.39666542221775!3d20.289146096881634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f57007b6bfa3563%3A0x30c4791f9217807e!2sInstituto%20Tecnol%C3%B3gico%20Superior%20del%20Sur%20de%20Yucat%C3%A1n!5e0!3m2!1ses-419!2smx!4v1710880046626!5m2!1ses-419!2smx" width="80px" height="100px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>

    </footer>
</main>     

</body>
</html>

