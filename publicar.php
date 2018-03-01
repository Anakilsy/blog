<?php
//para ocultar los errores
error_reporting(0);

?>
<!DOCTYPE html>
    
<?php
$link = mysql_connect('localhost', 'ejeblog', 'ejeblogpsw');
mysql_select_db('ejeblog');

$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$descripcion=$_POST['descripcion'];

if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png")){
    
$dir_subida = 'imagenes/';
$fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
$creacion=move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);   
}
else{
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
        <a href="administrador.php"><h1>Administrador del Blog</h1></a>
    </div>
</div>
<div class="fondo">
    <div class="contenido">
        <h2 class="resolucion">Error al publicar la nueva entrada</h2>
        <h3 class="explicacion"><span>La imagen no tiene el formato adecuado</span><br/>Sólo se admite jpg, jpeg, png o gif</h3>
         <a class="quehacer nueva" href="nueva.php"><p>Crear nueva entrada</p></a>
         <a class="quehacer cambios" href="editar.php"><p>Modificar o borrar existente</p></a>
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
    
    <?php
};


if($creacion){
    $query = "INSERT INTO entradas VALUES (NULL, '".$fecha."', '".$titulo."', '".$texto."', '".$_FILES['imagen']['name']."', '".$descripcion."')";
    $result = mysql_query($query);
    if($result){
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
        <h2 class="resolucion buena">Entrada publicada con éxito</h2>
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
        <h2 class="resolucion">Error al publicar la nueva entrada</h2>
        <h3 class="explicacion"><span>Al menos un campo de texto no ha recibido el contenido que esperaba</span><br/>
        La fecha se escribe en formato dd-mm-aaaa o seleccionando del calendario<br/>
        El título no puede superar los 300 caracteres<br/>
        El texto no puede superar los 100.000 caracteres<br/>
        La imagen se debe seleccionar pulsando en examinar<br/>
        La descripción de la imagen no puede superar los 100 caracteres
        </h3>
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
};
mysql_close($link);
?>