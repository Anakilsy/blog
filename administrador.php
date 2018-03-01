<?php
//para ocultar los errores
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
    <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
    <title>Administrador</title>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/cuenca/"; target="blank" class="logo"></a>
        <a href="administrador.php"><h1>Administrador del Blog</h1></a>
    </div>
</div>
<div class="fondo">
    <div class="contenido">
         <a class="quehacer nueva" href="nueva.php"><p>Crear nueva entrada</p></a>
         <a class="quehacer cambios" href="editar.php"><p>Borrar<br/>o editar<br/>una entrada</p></a>
         <a class="quehacer alblog" href="index.php"><p>Ver Blog</p></a>
        </div>
    </div>
    <div class="pie">
        <div class="contenidopie">
            <a href="https://www.jccm.es/"><img src="imagenes/comunes/junta.jpg" alt="logo de la jccm" title="logo de la jccm" class="junta"/></a>
            <a href="http://www.ajeclm.com/programa-tic/"><img src="imagenes/comunes/programatic.jpg" alt="programatic" title="programatic" class="programatic"/></a>
            <a href="http://www.ajeclm.com/cuenca/"><img src="imagenes/comunes/aje.jpg" alt="logo de aje" title="logo de aje" class="aje"/></a>
            <a href="http://ec.europa.eu/esf/home.jsp?langId=es"><img src="imagenes/comunes/europeo.jpg" alt="logo del fondo social europeo" title="logo del fondo social europeo" class="europeo"/></a>
        </div>
    </div>    
</div>


</body>
</html>