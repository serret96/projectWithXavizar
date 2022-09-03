<?php
error_reporting(0);
$email = $_POST['email'];
$password = $_POST['password'];

$conect = require_once "conexion.php";

$sql = "SELECT * FROM users where email = '$email' and password = '$password'";
$resultado = mysqli_query($bd, $sql);

$filas = mysqli_num_rows($resultado);
session_start();

if($filas){
  header("location: home.php");
}
mysqli_free_result($resultado);
mysqli_close($conect);
?>
