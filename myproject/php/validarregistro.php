<?php
  require_once "conexion.php";
  error_reporting(0);

  $email = $_POST['email'];
  $password = $_POST['password'];
  $password1 = $_POST['password1'];
  $username = $_POST['username'];

  $consulta = "SELECT * FROM users where email = '$email'";
  $resultado = mysqli_query($bd, $consulta);

  if (mysqli_num_rows($resultado)>0)
  {
    echo ("Email address is already used.");
  } elseif ($password1 == $password){
 
    $sql = "INSERT INTO users(email, password, username) VALUES ('$email', '$password', '$username')";
    $a = mysqli_query($bd, $sql);
    header("location: index.php");
  } else{
  echo ("password don't match or connection fail");
}
?>
