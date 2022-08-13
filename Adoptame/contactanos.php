<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Adóptame</title>
    <link rel="stylesheet" type="text/css" href="css/estilosSamuel.css" />
    <link rel="stylesheet" href="css/estilosWilson.css" />
  </head>
  <body>
    <header class="headervarias">
      <nav>
        <a href="index.html">Inicio</a>
        <a href="acercade.html">Acerca de</a>
        <a href="ubicacion.html">Ubicación</a>
        <a href="contactanos.html">Contacto</a>
        <a href="loguin.html">Iniciar Sesión</a>
        <a href="registro.html">Registro</a>
      </nav>
      <section class="textos-header">
        <h1>Contacto</h1>
        <h2>¡Tenemos varias opciones!</h2>
      </section>
    </header>

    <main>
      <div id="contenedor">
        <table>
          <tr>
            <td><h3>Sucursal Centro</h3></td>
            <td><h3>Sucursal Ambar</h3></td>
          </tr>
          <tr>
            <td>
              <p id="colorparrafoestandar">
                Dirección: Calle Central Ote. #75, Tuxtla Gutiérrez
                <br />(961)6022123 <br />
                info@adoptaunamigo.com.mx
              </p>
            </td>
            <td>
              <p>
                Dirección: Circuito camino, Tuxtla Gutiérrez <br />(961)6096323
                <br />
                info@adoptaunamigoambar.com.mx
              </p>
            </td>
          </tr>
        </table>

        <aside>
          <p class="contactodatos">También puedes enviarnos un mensaje por:</p>
          <section id="center">
            <a href="https://www.facebook.com"
              ><img
                src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                width="50"
                height="70"
            /></a>
            <a
              href="https://api.whatsapp.com/send?&phone=526022123&text=Hola%2C+¡Necesito+Adoptar+un+amiguito!&lang=es"
              ><img
                src="https://image.flaticon.com/icons/png/512/124/124034.png"
                width="70"
                height="70"
            /></a>
            <p>(Haz clic sobre alguna red social para empezar)</p>
          </section>
        </aside>

        <br />
        <section id="center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3820.4780278308367!2d-93.10359067880607!3d16.752876408679928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1616134855044!5m2!1ses!2smx"
            width="400"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3820.5931057157986!2d-93.07475415534508!3d16.747142209207205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1616134940396!5m2!1ses!2smx"
            width="400"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </section>


        <br /><br />

        <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
         method="POST">
        
        <section id="center">
          <p>
            Ingrese los campos correspondientes, escriba sus comentarios dudas ó
            sugerencias y nuestro personal se encargara de atenderlas
          </p>
          <br />
          <p class="contactodatos2">
            Nombre completo:
            <input
              type="text"
              class="formulario"
              name="camponombre"
              
              id="altoinput"
            />
            Email:
            <input
              type="text"
              class="formulario"
              name="campoemail"
          
              id="altoinput"
            />
</p>
          <p><textarea name="campotexto" 
          placeholder="¡Comparte tu opinión!" rows="20"
          cols="100" class="formulario"></textarea></p>
        
          <p><input type="submit" name="submit"
          value="Enviar"></p>
        </section>

        <?php
          include("validacion.php");
        ?>

      </form>
        <hr />
      </div>
    </main>

    <footer>
      <h2 class="titulo-final">Wilson Velázquez | Samuel Escobar</h2>
    </footer>
  </body>
</html>
