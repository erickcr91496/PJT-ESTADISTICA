<?php 
require_once '../modelo/datos.php';

session_start();

$cadena = $_POST['cadena'];

$modeloDatos = new Datos();

$datos =$modeloDatos->getCadena($cadena);

$ordenar = $modeloDatos->ordenar($datos);
$unicos = $modeloDatos->valoresUnicos($datos);
 $clases = $modeloDatos->clases($datos);
 $cj = $modeloDatos->anchoClase($datos);
 $intervalo = $modeloDatos->intervalo($unicos);
$fa =$modeloDatos->Fa($unicos);
//$maximo = $modeloDatos->maximo($datos);

//echo $rango = $modeloDatos->rango($datos);
//echo $contar = $modeloDatos->contar($datos);

// foreach ($ordenar as  $value) {
//     echo $value." ";
// }
$_SESSION['vector'] = $datos;
$_SESSION['ordenar'] = $ordenar;
$_SESSION['unicos'] = $unicos;
$_SESSION['cj'] = $cj;
$_SESSION['intervalo'] =$intervalo; 
$_SESSION['fa'] =$fa; 

header("Location:../vista/tabla.php");