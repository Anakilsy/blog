
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

$numero=$_POST['numero'];
$editaroborrar=$_POST['editaroborrar'];

//conectamos con la base de datos
$link = mysql_connect('localhost', 'ejeblog', 'ejeblogpsw');
mysql_select_db('ejeblog');

$query = "SELECT * FROM entradas WHERE id_entrada = $numero"; 
$queryEntradas = mysql_query($query);

if($editaroborrar==0){
    
while ($entrada = mysql_fetch_object($queryEntradas)){
    //recogemos sus valores
$id = $entrada->id_entrada;
$fechasql = $entrada->fecha;
$imagen = $entrada->imagen;
$descripcion = $entrada->descripcion_img;
$titulo = $entrada->titulo;
$texto = $entrada->texto;
    
 ?>
        
        <h2 class="resolucion"><span>¿Seguro que quieres borrar la entrada completa?</span><br/>Esta acción no se puede deshacer</h2>

        <div class="entrada">
            <div class="contenedorimagen">
                <img class="imagen" src="imagenes/<?php echo $imagen; ?>" alt="<?php echo $descripcion; ?>" title="<?php echo $descripcion; ?>"/>
            </div>
            <div class="informacion">
                <p class="fecha"><?php echo fechaTxt ($fechasql); ?></p>
                <h2 class="titulo"><?php echo $titulo; ?></h2>
                <p class="texto"><?php echo $texto; ?></p>
        <form action="borrar.php" method="post" enctype="multipart/form-data">
            <input type="number" name="numero" value="<?php echo $id; ?>" style="display: none;"/>
            <input type="submit" class="boton borrar" value="BORRAR"/>
        </form>
            </div>
        </div>
  
<?php
};
}
else{
while ($entrada = mysql_fetch_object($queryEntradas)){
    //recogemos sus valores
$id = $entrada->id_entrada;
$fechasql = $entrada->fecha;
$imagen = $entrada->imagen;
$descripcion = $entrada->descripcion_img;
$titulo = $entrada->titulo;
$texto = $entrada->texto;
    
 ?>
        
        <h2 class="resolucion"><span>Edita los campos que desees y guarda la entrada completa<span><br/>Esta acción no se puede deshacer</h2>

        <div class="entrada">
            <form action="guardaredicion.php" method="post" enctype="multipart/form-data">
            <div class="contenedorimagen">
                <img class="imagen imagenmodificar" src="imagenes/<?php echo $imagen; ?>" alt="<?php echo $descripcion; ?>" title="<?php echo $descripcion; ?>"/>
                <input type="text" name="imagentexto" value="<?php echo $imagen; ?>" style="display: none;"/>
                <input class="descripcion" type="text" name="descripcion" value="<?php echo $descripcion; ?>"/>
                <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" style="display: none;"/>
                <input class="examinar" type="file" name="imagen"/>
            </div>
            <div class="informacion">
                <input class="fecha" type="date" name="fecha" defaultValue value="<?php echo $fechasql; ?>" />
                <p class="fecha fechaanterior"><?php echo fechaTxt ($fechasql); ?></p>
                    <textarea class="titulo" type="text" name="titulo" ><?php echo $titulo; ?></textarea>
                    <textarea class="texto" name="texto"><?php echo $texto; ?></textarea>
                    <input type="number" name="numero" defaultValue value="<?php echo $id; ?>" style="display: none;"/>
                    <input class="boton guardar" type="submit" value="GUARDAR" />
            </div>
            </form>
        </div>
        <?php
    };
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
