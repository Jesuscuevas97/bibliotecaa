<?php
    echo "HOLa vas a entrar a esta pagina siu ";
    echo "<br>";
    echo "<br>";

    if(isset($_POST['enviar'])){
        print_r($_POST['email']);
        print_r($_POST['contraseña']);

      $nombre =  $_POST['email'];
      $contraseña = $_POST['contraseña'];

      echo "<br>";
        echo "amo a validar correo y contra";
    }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesion</title>
</head>
<body>
    <h1>Nueva sesion de <?= $nombre; ?></h1>
    <h1>Contraseña  de <?= $nombre; ?> <?= $contraseña; ?></h1>
</body>
</html>