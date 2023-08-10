<?php


   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de biblioteca</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body class="">
       
        <div>
            <div class=" container border mt-5">
                <h1 class="text-center ">Iniciar sesion</h1>
                <form action="controller/login/storeLogin.php" method="post">
                    <div>
                        <label for="">Usuario</label>
                        <input type="text" placeholder="Usuario" name="email">
                    </div>
                    <div>
                        <label for="">Contraseña</label>
                        <input type="password" placeholder="Contraseña" name="contraseña">
                    </div>
                    <div>
                        <input type="submit" name="btnLogin" id="enviar" value="btnLogin">
                    </div>
                </form>
            </div>
        </div>
</body>
</html>