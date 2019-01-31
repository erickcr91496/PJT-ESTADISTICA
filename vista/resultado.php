<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medidas</title>
</head>
<body>
<?php
         include_once '../modelo/datos.php';
            session_start();
          $mensaje = $_SESSION['vector'];
          $ordenar = $_SESSION['ordenar'];
          $maximo  = $_SESSION['max'] ;


                    //foreach ($mensaje as $datos) {
      echo " <h2 style='color:red'>datos : " .join(",", $mensaje). "</h2>";
                  //  foreach ($ordenar as $datos) {
              
      echo " <h2 style='color:blue'>ordenados : " .join(",",$ordenar). "</h2>";
                     //    }
          
       echo " <h2 style='color:blue'>maximo : " .$maximo. "</h2>";
             
         
                     

  ?>

</body>
</html>