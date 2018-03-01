

<!DOCTYPE html>

<html>
<head>
    <title>Blog</title>
    <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/" target="_blank" class="logo"></a>
        <a href="index.php" ><h1>administrador de blog</h1></a>
    </div>
    
</div>
<div class="fondo">
    <div class="contenido">
   <h2 class="titular"> CREAR NUEVA ENTRADA</h2>
      <div class="entrada">
         <form action="publicar.php" method="post" enctype="multinpart/form-data">
           </form>
        <div class="contenedorimagen">
             <img class="imagen" src="imagenes/comunes/iconoimagen.png"
                     alt="<?php echo $descripcion;?>" title="<?php echo $descripcion;?>"/>
                     <input class="descripcion" required type="text" name="descripcion" placeholder="describe brevemente la imagen"/>
                     <input class="examinar" required type="file" name="imagen"/>
            </div>
            <div class="informacion">
              <input class="fecha" required type="date" name="fecha">
             <textarea class="titulo" required  name="titulo" placeholder="escribe un titulo"></textarea>
               <textarea  class="texto" required  name="texto" placeholder="escribe un texto"></textarea>
                <form action="entrada.php" method="post" enctype="multipart/form-data">
                 
                    <input type="submit" class="boton publ" value="publicar"/>
                </form>
            </div>
        </div>
        

          
        </div>
      </div>  
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
