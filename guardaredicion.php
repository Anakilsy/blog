<!DOCTYPE html>

<?php
//para ocultar los errores
error_reporting(0);

?>


    
<?php

$numero=$_POST['numero'];

$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$descripcion=$_POST['descripcion'];
$imagentexto=$_POST['imagentexto'];

$link = mysql_connect('localhost', 'ejeblog', 'ejeblogpsw');
mysql_select_db('ejeblog');


if($_FILES['imagen']['name']){
    $imagen=$_FILES['imagen']['name'];    
    $query = "UPDATE entradas SET fecha = '".$fecha."', titulo = '".$titulo."', texto = '".$texto."', imagen = '".$imagen."', descripcion_img = '".$descripcion."' WHERE id_entrada = '".$numero."';";
    $queryEntradas = mysql_query($query);
    
    $borrado=unlink("imagenes/$imagen");
    $dir_subida = 'imagenes/';
    $fichero_subido = $dir_subida . basename($imagen);
    $creacion=move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);
    
    ?>
<html>
<head>
    <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
    <title>Administrador</title>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/cuenca/"; target="blank" class="logo"></a>
        <a href="index.php"><h1>Administrador del Blog</h1></a>
    </div>
</div>
<div class="fondo">
    <div class="contenido">
        <h2 class="resolucion buena">La entrada se ha actualizado correctamente</h2>
         <a class="quehacer nueva" href="nueva.php"><p>Crear nueva entrada</p></a>
         <a class="quehacer cambios" href="editar.php"><p>Modificar o borrar existente</p></a>
         <a class="quehacer alblog" href="index.php"><p>Ver Blog</p></a>
        </div>
    </div>
    <div class="pie">
        <div class="contenidopie">
            <a href="https://www.jccm.es/" target="blank"><img src="imagenes/comunes/junta.jpg" alt="logo de la jccm" title="logo de la jccm" class="junta"/></a>
            <a href="http://www.ajeclm.com/programa-tic/" target="blank"><img src="imagenes/comunes/programatic.jpg" alt="programatic" title="programatic" class="programatic"/></a>
            <a href="http://www.ajeclm.com/cuenca/" target="blank"><img src="imagenes/comunes/aje.jpg" alt="logo de aje" title="logo de aje" class="aje"/></a>
            <a href="http://ec.europa.eu/esf/home.jsp?langId=es" target="blank"><img src="imagenes/comunes/europeo.jpg" alt="logo del fondo social europeo" title="logo del fondo social europeo" class="europeo"/></a>
        </div>
    </div>    
</div>


</body>
</html>
<?php
    
    }
else{
    $imagen=$imagentexto;
    $query = "UPDATE entradas SET fecha = '".$fecha."', titulo = '".$titulo."', texto = '".$texto."', imagen = '".$imagen."', descripcion_img = '".$descripcion."' WHERE id_entrada = '".$numero."';";
    $queryEntradas = mysql_query($query);
        ?>
<html>
<head>
    <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
    <title>Administrador</title>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/cuenca/"; target="blank" class="logo"></a>
        <a href="index.php"><h1>Administrador del Blog</h1></a>
    </div>
</div>
<div class="fondo">
    <div class="contenido">
        <h2 class="resolucion buena">La entrada se ha actualizado correctamente</h2>
         <a class="quehacer nueva" href="nueva.php"><p>Crear nueva entrada</p></a>
         <a class="quehacer cambios" href="editar.php"><p>Modificar o borrar existente</p></a>
         <a class="quehacer alblog" href="index.php"><p>Ver Blog</p></a>
        </div>
    </div>
    <div class="pie">
        <div class="contenidopie">
            <a href="https://www.jccm.es/" target="blank"><img src="imagenes/comunes/junta.jpg" alt="logo de la jccm" title="logo de la jccm" class="junta"/></a>
            <a href="http://www.ajeclm.com/programa-tic/" target="blank"><img src="imagenes/comunes/programatic.jpg" alt="programatic" title="programatic" class="programatic"/></a>
            <a href="http://www.ajeclm.com/cuenca/" target="blank"><img src="imagenes/comunes/aje.jpg" alt="logo de aje" title="logo de aje" class="aje"/></a>
            <a href="http://ec.europa.eu/esf/home.jsp?langId=es" target="blank"><img src="imagenes/comunes/europeo.jpg" alt="logo del fondo social europeo" title="logo del fondo social europeo" class="europeo"/></a>
        </div>
    </div>    
</div>


</body>
</html>
<?php
    };



 mysql_close($link);
?>

