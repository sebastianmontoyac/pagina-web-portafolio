<?php
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sebmontoyaart</title>
    <link rel="stylesheet" href="./styles/styleportafolio2_formulario.css" />
  </head>
  <body>
    <header>
      <a href="./index.html"><h1>SEBASTIAN MONTOYA <br> ART</h1></a>
      <p class="cita">
        "Dibujar es como hacer un gesto expresivo con la ventaja de la permanencia." 
        Henri- Emile Matisse </p>
    </header>
    <main>
        <div class="container">
            <div class="FORMULARIO">FORMULARIO <br>DE CONTACTO</div>

            <form action="formulariopost.php" method="post">
            <div class="nombres"> 
            <label for="">NOMBRES</label> <input type="text" name="nombre">
            </div>
            <div class="apellidos">
            <label for="">APELLIDOS</label><input type="text" name="apellidos">
            </div>
            <div class="correo">
            <label for="">CORREO</label> <input type="email" name="correo" id="">
            </div>
            <div class="celular">
            <label for="">CELULAR</label> <input type="tel" name="celular" id="">
            </div>
            <div class="informacion">
            <label for="">INFORMACION</label> <input type="text" name="informacion" id="">
            </div>
            <div class="enviar">
                <input type="submit" value="enviar">
            </div>

            </form>
             
          </div>
    </main>
    <footer>
      <div class="conteiner-Fotter">
        <a href="./index.html" class="datos">Inicio</a>
        <a href="#" class="datos">Biografia</a>
        <a href="./Precios.html" class="datos">Precios</a>
      </div>
    </footer>
  </body>
</html>


