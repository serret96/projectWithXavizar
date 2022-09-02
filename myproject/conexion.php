<?php
$host = "localhost";
$contraseña = "";
$usuario = "root";
$nombre_bd = "users";

try {
  $bd = mysqli_connect($host, $usuario, $contraseña, $nombre_bd);
    if ($bd){
    echo ("");
    }
} catch (Exception $e){
  echo ("Problema con la conexion:");
}
?>
