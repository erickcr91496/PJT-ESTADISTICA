<?php 
require_once '../modelo/datos.php';

session_start();

$cadena = $_POST['cadena'];

$modeloDatos = new Datos();

$datos =$modeloDatos->getCadena($cadena);

$ordenar = $modeloDatos->ordenar($datos);
$unicos = $modeloDatos->contar($datos);
echo "hola<br>";
// foreach ($ordenar as  $value) {
//     echo $value." ";
// }
// echo "<br>";

$_SESSION['vector'] = $datos;
$_SESSION['ordenar'] = $ordenar;

header("Location:../vista/resultado.php");