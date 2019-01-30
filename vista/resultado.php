<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
         include_once '../modelo/datos.php';
                 session_start();
                    $mensaje = $_SESSION['vector'];

                    //foreach ($mensaje as $datos) {
                         echo " <h2 style='color:red'>Debe pagar : " .join(" - ", $mensaje). "</h2>";
                    // }
            ?>





</body>
</html>