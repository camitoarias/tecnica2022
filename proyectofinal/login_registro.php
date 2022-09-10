<?php
include("menu.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="ingreso.css" type="text/css">
    <style>
        .alert-danger{
            width: 100%;
            height: auto; 
            background:  #F1C9EF;
            border-radius: 10px;
        }

    </style> 
</head>
<body>



        <main>

            <div class="contenedor_todo">
                <div class="caja_trasera">
                    <div class="caja_trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para que encuentres todos nuestros servicios</p>
                        <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja_trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Te invitamos a que te registres así podras conocer todos nuestros servicios de Aurora store </p>
                        <button id="btn_registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor_login-register">
                    <!--Login-->
                    <form action="guardar.php" method="POST" class="formulario_login">
                        <h2>Iniciar Sesión</h2>
                            <?php
                                if(isset($_GET['error'])):
                                    $error=$_GET['error']; 
                            ?>
                                  <div class="alert-danger" role="alert">
                                        <?php 
                                        echo $error; 
                                        ?>
                                        <br> 
                                    </div>
                            <?php 
                            endif
                            ?>
                        <input type="text" name="correo" placeholder="Correo electronico">
                        <input type="password" name="contrasena" placeholder="Contraseña">
                        <button type="submit" name="iniciar_session">Entrar</button>
                    </form>

                    <!--Register-->
                    <form  action="insertar.php" method="POST" class="formulario_register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Cedula" name="idUsuario" >
                        <input type="text" placeholder="Nombre" name="Nombre" required>
                        <input type="text" placeholder="Apellido" name="Apellido">
                        <input type="text" placeholder="Direccion" name="Direccion" required>
                        <input type="email" placeholder="Correo" name="Correo" >
                        <input type="password" placeholder="Contraseña" name="Contrasena" require>
                       
                        
                        <button type="submit" name="send">Registrar</button>
                                    
                    </form>
                

                    
                </div>
            </div>

        </main>

        <script src="script.js"></script>
</body>
</html>