
<?php

error_reporting(0);

$numero=$_POST['numero'];

$link = mysql_connect('localhost', 'ejeblog', 'ejeblogpsw');
mysql_select_db('ejeblog');

//seleccionamos las entradas
$queryactual = "SELECT * FROM entradas WHERE id_entrada = $numero"; 
$queryEntradasactual = mysql_query($queryactual);

while ($entradaa = mysql_fetch_object($queryEntradasactual)){
//recogemos los valores
$id = $entradaa->id_entrada;
$fechasql = $entradaa->fecha;
$imagen = $entradaa->imagen;
$descripcion = $entradaa->descripcion_img;
$titulo = $entradaa->titulo;
$texto = $entradaa->texto;
};
    $query = "DELETE FROM entradas WHERE id_entrada = $numero";
    $queryEntradas = mysql_query($query);
    
    if($queryEntradas){
        $borrado=unlink("imagenes/$imagen");
        if($borrado){
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
        <h2 class="resolucion buena">Entrada completamente borrada</h2>
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
        <h2 class="resolucion">Error al eliminar la imagen</h2>
        <h3 class="explicacion"><span>Los datos de la base de datos se han borrado pero no su imagen</span><br/>Puedes conservarla o borrarla manualmente<br/>Su ruta es: imagenes/<?php echo $imagen ?></h3>
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
        <h2 class="resolucion">Error al borrar la entrada</h2>
        <h3 class="explicacion"><span>No se ha borrado nada de la entrada seleccionada</span><br/>Pulsa en modificar o borrar existente para volver a intentarlo</h3>
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