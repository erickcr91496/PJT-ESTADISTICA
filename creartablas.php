<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table width='20' border="5"> 

<?php
 $cadena[][] ='maria';
 
 $cadena [][] ='morra';
 $cadena [][] ='jose';
 $cadena [][] ='pepe';

for ($i=1; $i < count ($cadena) ; $i++) { 
    
   for ($j=0; $j < count($cadena[$i]); $j++) { 
        echo ' <tr>';

   echo' <td> '. $cadena[$i][$j]. '</td>';
   }

}
?>


</table>






</body>
</html>