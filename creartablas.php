<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    


<?php
 
 $cadena ="5,20,40,30,60";

$imprimir = explode(",",$cadena);
//$res =$array;
//$array =array($aux);


echo  "".join(",", $imprimir)."<br>";

$pos ='';
 function intervalo ($array)
    {
        $ini=min($array);
        $cj = 3;
        $fin= $ini+$cj;
         $pos = array();
         $res='';
        for ($i=1; $i <=3 ; $i++) { 
         $res.='';

            $pos[$i] = $ini.'-'.$fin." ";
            $res .=$pos[$i];

             $ini=$fin+1;

             if ($i == (3)) {
                    $fin = max($array);

                }else{

                    $fin = $ini +$cj;
                   }   
               
                   
      }

        return $res;

    }
$array= array('E','R','I','C','K');

                                            
//echo $array[0][3];
function imprimirTabla ($array)
    {
        $res='<tr>';
        $var='';
        for ($i=0; $i <count($array) ; $i++) {

            //for ($j=0; $j <11 ; $j++) { 
                
                $var=$array[$i];
              $res.='<td>'.$var.'</td>';  
          // }
           // $res.='</tr>';
        }
        return $res;
    }
    

?>
    

<!-- <table width='40' border=5>  -->




</table>
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
                   
                  
                echo imprimirTabla($array);  

                echo '<td>'.inervalo($array).'</td>';

                  echo "</tr>";

              
                    ?>
                </tbody>
            </table>






</body>
</html>