<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <title>Login</title>
</head>
<body>
    <div class="contenedor-principal--log">
        <div class="video">
            <div class="overlay">
                <div class=" contenido-video">
                    <div class=" principal">
                        <div class="titulo--log">
                            <h1>Bienvenido al Sistema de Gestion de Organizaciones Estudiantiles</h1>
                            <button onclick="document.getElementById('id01').style.display='block'" class="boton-acceder">Acceder</button>
                        </div>
                    </div>  
                </div>      
            </div>
            <video  autoplay muted loop>
                <source src="video/vd.mp4" type="video/mp4">    
            </video>
        </div>
    <div>   

                  
        <div id="id01" class="modal">
            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Cerrar">&times;</span>
                <img src="build/img/profile.svg" alt="Avatar" class="avatar">
                </div>
            
                <div class="container">
                <label for="uname"><b>Usuario</b></label>
                <input type="text" placeholder="Ingrese el usuario" name="uname" required class="login-text">
            
                <label for="psw"><b>Contraseña</b></label>
                <input type="password" placeholder="Ingrese su contraseña" name="psw" required class="login-text">

                <a href="index.php">
  
                <button type="button"  class="boton-acceder">Acceder</button>
                </a>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Recuerdame
                </label>
                </div>
            
                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                <span class="psw">Olvidaste tu <a href="#">contraseña?</a></span>
                </div>
            </form>
            </div>
          
        <div class="footer">
            <p> Copyright &copy 2021 Todos los Derechos Reservados - Universidad Nacional Santiago Antunez de Mayolo</p>
        </div>
</body>
</html>