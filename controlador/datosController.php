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
//$maximo = $modeloDatos->maximo($datos);

//echo $rango = $modeloDatos->rango($datos);
//echo $contar = $modeloDatos->contar($datos);

// foreach ($ordenar as  $value) {
//     echo $value." ";
// }
// echo "<br>";



$_SESSION['vector'] = $datos;
$_SESSION['ordenar'] = $ordenar;

$_SESSION['clases'] = $clases;
//$_SESSION['filas'] = $fila;
//$_SESSION['max'] = $maximo;


header("Location:../vista/tabla.php");