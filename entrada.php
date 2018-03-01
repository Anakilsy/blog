<?php 
include_once('funciones.php');
?>


<!DOCTYPE html>

<html>
<head>
    <title>Blog</title>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/" target="_blank" class="logo"></a>
        <a href="index.php" ><h1>creador de marionetas</h1></a>
    </div>
    
</div>
<div class="fondoentrada">
    <div class="contenidoentrada">
   <?php
 $numero = $_POST['numero'];       
        
 // conectaamos con la base de datos
 $link = mysql_connect('localhost','ejeblog','ejeblogpsw');
 mysql_select_db('blog');
 
 //seleccionamos las entradas
 $query ="SELECT * FROM entradas WHERE id_entrada=$numero";
 $queryEntradas = mysql_query($query);
 
while($entrada = mysql_fetch_object($queryEntradas)){
    //recogemos sus valores
$id = $entrada->id_entrada;
$fechasql = $entrada->fecha;
$imagen = $entrada->imagen;
$descripcion = $entrada->descripcion_img;
$titulo = $entrada->titulo;
$texto = $entrada->texto;
 ?>
    <a class="volver" href="index.php"><p>VOLVER</p></a>
        <h2 class="tituloentrada"><?php echo $titulo; ?></h2>
        <div class="imagenentrada">
            <img class="imagen" src="imagenes/<?php echo $imagen; ?>"
                     alt="<?php echo $descripcion;?>" title="<?php echo $descripcion;?>"/>
        </div>
        <p class="textoentrada">
            <span class="fechaentrada"><?php echo fechaTxt($fechasql); ?></span>
            <span class="huecoimagen"></span><?php echo $texto; ?>
        </p>
    </div>
    
 <?php
 };
 mysql_close($link);
?>
    </div>
  <div class="pie" >
    <div class="contenidopie">
       <a href="https://www.jccm.es/" target="_blank">
          <img class="junta" src="imagenes/comunes/junta.jpg"   
               alt="logo de la jccm" title="logo de jccm"/>
          </a>
       <a href="http://www.ajeclm.com/programa-tic/" target="_blank">
          <img class="programatic" src="imagenes/comunes/programatic.jpg" 
               alt="programatic" title="programatic"/>
          </a>
        <a href="http://www.ajeclm.com/" target="_blank">
          <img class="aje" src="imagenes/comunes/aje.jpg" 
               alt="logo de aje" title="logo aje"/>
          </a>
        <a href="http://ec.europa.eu/esf/home.jsp?langId=es" target="_blank">
            <img class="europeo" src="imagenes/comunes/europeo.jpg"
               alt="logo del fondo social europeo" title="logo del fondo social europeo"/>
          </a>
    </div>
  </div>  
</div>

</body>
</html>


<?php

?>
