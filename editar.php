<?php
//para ocultar los errores
error_reporting(0);

include_once ('funciones.php');

?>

<!DOCTYPE html>

<html>
<head>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
    <title>Blog</title>
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
    
<?php

//conectamos con la base de datos
$link = mysql_connect('localhost', 'ejeblog', 'ejeblogpsw');
mysql_select_db('ejeblog');

//seleccionamos las entradas
$query = "SELECT * FROM entradas ORDER BY fecha DESC";
$queryEntradas = mysql_query($query);

while ($entrada = mysql_fetch_object($queryEntradas)){
    //recogemos sus valores
$id = $entrada->id_entrada;
$fechasql = $entrada->fecha;
$imagen = $entrada->imagen;
$descripcion = $entrada->descripcion_img;
$titulo = $entrada->titulo;
$texto = $entrada->texto;
    
 ?>
        <div class="entrada">
            <div class="contenedorimagen">
                <img class="imagen" src="imagenes/<?php echo $imagen; ?>" alt="<?php echo $descripcion; ?>" title="<?php echo $descripcion; ?>"/>
            </div>
            <div class="informacion">
                <p class="fecha"><?php echo fechaTxt ($fechasql); ?></p>
                <h2 class="titulo"><?php echo $titulo; ?></h2>
                <p class="texto"><?php echo $texto; ?></p>
                <form action="modificar.php" method="post" enctype="multipart/form-data">
                    <input type="number" name="numero" value="<?php echo $id; ?>" style="display: none;"/>
                    <input type="number" name="editaroborrar" value="1" style="display: none;"/>
                    <input type="submit" class="boton edit" value="EDITAR"/>
                </form>
                <form action="modificar.php" method="post" enctype="multipart/form-data">
                    <input type="number" name="numero" value="<?php echo $id; ?>" style="display: none;"/>
                    <input type="number" name="editaroborrar" value="0" style="display: none;"/>
                    <input type="submit" class="boton del" value="BORRAR"/>
                </form>
            </div>
        </div>
  
<?php
};

mysql_close($link);
?>
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