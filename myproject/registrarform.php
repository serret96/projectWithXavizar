<?php
if (empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["username"])){
print("faltandatos");
}

include_once 'conexion.php';
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];

$sentencia = $bd->prepare("INSERT INTO users(email, password, username) VALUES (?,?,?);");
$resultado = $sentencia->execute([$email], [$password], [$username]);

?>
