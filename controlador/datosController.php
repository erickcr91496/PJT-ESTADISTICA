<?php 
require_once '../modelo/datos.php';

session_start();

$cadena = $_POST['cadena'];

$modeloDatos = new Datos();

$_SESSION['vector'] = $modeloDatos->getCadena($cadena);

header("Location:../vista/resultado.php");