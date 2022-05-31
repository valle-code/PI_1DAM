<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos.css" type="text/css">
  <script src="../Logica/script/validacionRegistro.js"></script>
  <title>Registro</title>
</head>
<body>
  <div id="container">
    
    <div class="padre">
      <a title="atras" href="./index.php"><img src="./imagenes/icons8-atrás-100.png" alt="atrás"/></a>
      <div id="caja">
        <form action="../Logica/controladorRegistro.php" method="post" id = "registro">
          <label for>Email:</label>
          <input type="text" name="email" id="email" class="inputTexto" required onkeydown="validarEmail()"/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning1"></p>
          </div><br>     
          <label for>Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="inputTexto" required onkeyup="validarTexto()"/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning2"></p>
          </div><br>     
          <label for>Apellidos:</label>
          <input type="text" name="apellidos" id="apellidos" class="inputTexto" required/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning3"></p>
          </div><br>     
          <label for>Contraseña:</label>
          <input type="password" name="psw" id="psw" minlength = "8" maxlength = "16" required onkeyup="validarPsw()"/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning4"></p>
          </div><br>     
          <label for>Confirmar contraseña:</label>
          <input type="password" name="psw2" id="psw2" placeholder="Escriba de nuevo su contraseña" minlength = "8" maxlength = "16" required onkeyup="validarEmail()"/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning5"></p>
          </div><br>     
          <input type="submit" name="enviar" id="enviar" value="Registrarse" onclick="checkInputs()"/><br><br>
          <div class="aviso">
            <p class = "warning" id = "warning6"></p>
          </div> 
        </form>
      </div>
    </div>
  </div>
</body>

</html>