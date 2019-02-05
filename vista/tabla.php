<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<?php
         include_once '../modelo/datos.php';
            session_start();
          $mensaje = $_SESSION['vector'];
          $ordenar = $_SESSION['ordenar'];
          $maximo  = $_SESSION['max'] ;
         $clases  = $_SESSION['clases'] ;
        $cj = $_SESSION['cj'];
        $intervalo = $_SESSION['intervalo'];
        $fa = $_SESSION['fa'];
        
  ?>
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ProjectProbView</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">PROYECTO FINAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        </nav>

        <!-- JUMBOTRON -->
        <div class="jumbotron ">
            <h3 class="text-center">RESULTADOS</h3>           
            <hr class="my-4">

            <div class="shadow-sm p-3 mb-5 bg-white rounded text-center" >Datos Ordenados</div>
                    <?php
                
                    echo "<h2 class= text-center  >  " .join(",", $ordenar). "</h2>";
                   
                    ?>  

            <hr class="my-4 " >
            <div class="shadow-sm p-3 mb-5 bg-white rounded text-center" class="table-responsive ">Tabla de Inferencia</div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Clases</th>
                        <th scope="col">fa</th>
                        <th scope="col">faA</th>
                        <th scope="col">fr%</th>
                        <th scope="col">frA%</th>
                        <th scope="col">fi</th>
                        <th scope="col">fa*fi</th>
                        <th scope="col">fa*log(fi)</th>
                        <th scope="col">fa/fi</th>
                        <th scope="col">fa*(fi^2)</th>
                        <th scope="col">fa(|fi-x|)</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php   
                    
                                         
               // foreach ($array as $key ) {
                      
                
                 echo $intervalo;
                    
                 echo "<td>sss</td>";

                 echo "<td>sss</td>";

                echo $fa; 

                  echo "</tr> ";
               // }                   

                    ?>
                </tbody>
            </table>

<!--***************************CUANTILES******************************************-->



            
            <hr class="my-4">
            <div class="shadow-sm p-3 mb-5 bg-white rounded text-center" class="table-responsive text-center">Medidas de Tendencia Central</div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">DNA</th>
                        <th scope="col">DA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">X</th>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <th scope="row" >Mg</th>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <th scope="row">Ma</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Mc</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Dm</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Mediana</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Moda</th>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
            <hr class="my-4">
      

    </body>
</html>
