<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loguin</title>
    <link rel="stylesheet" href="css/estilosLoguin.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="formulario">
      <div class="titulos">Registrarse</div>
      <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
         method="POST">
        <div class="opcion">
          <input type="text" name="campousuario" placeholder="Usuario" />
        </div>
        <div class="opcion">
          <input type="email" name="campoemail" placeholder="Email" />
        </div>
        <div class="opcion">
          <input type="password" name="campocontrasena" placeholder="Contraseña" />
        </div>
        <div class="opcion">
          <input type="text"  name="camponombre" placeholder="Nombre" />
        </div>
        <div class="opcion">
          <input type="text" name="campoapellidos" placeholder="Apellidos" />
        </div>
        <div class="opcion">
          <input type="text" name="campotelefono"  placeholder="Telefono" />
        </div>
        <div class="opcion">
          <input type="submit" name="submit" value="Registrarse Ahora" />
        </div>
        <br>
        <?php
          include("validacionregistro.php");
        ?>
        <div class="opcion">
            <a href="index.html">Volver</a>
        </div>
   </div>
      </form>>
   </form>
  </body>
</html>
