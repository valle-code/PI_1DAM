<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./estilos.css" type = "text/css">
    
    <script src="../Logica/script/validacionLogin.js"></script>
    <title>Login</title>
</head>
<body>
    <div id = "container">
        <div class = "padre">  
          <div id = "logcaja">
            <form action="../Logica/controladorLogin.php" method="post" id = "loginForm">
            <div id = "campos">
                <label for>Email:</label>
                <input type="text" name="email" id="email" class = "loginputs" required onkeyup="validarEmail()"/><br><br>
                <div class="aviso">
                    <p class = "warning" id = "warning6"></p>
                </div><br>
                <label>Contraseña:</label>
                <input type="password" name="psw" id="psw" class = "loginputs" required onkeyup="validarPsw()"/><br><br>
                <div class="aviso">
                    <p class = "warning" id = "warning1"></p>
                </div><br>
                <input type="submit" name="login" id="login" value = "login" onclick="checkInputs()"><br><br><br><br>
                <div class="aviso">
                    <p class = "warning" id = "warning2"></p>
                </div><br><br>
            </div><br><br>
            <div id = "centrar">
                <a title="atras" href="./index.php"><img src="./imagenes/LogoDani-02.png" alt="atrás" heigth = "200px" width = "200px"/></a>
            </div>
            </form>
           </div>
        </div>
    </div>
</body>
</html>