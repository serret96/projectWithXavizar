
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Financial Galaxy</title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <?php
      include_once "conexion.php";
      $sentencia = $bd -> query("select * from users");
      $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
      print_r($persona);
    ?>
    <section id="navbarContainer">
        <div class="backgroundNav">
          <img id="navbarmenu" src="https://cdn.pixabay.com/photo/2017/06/09/23/22/avatar-2388584_960_720.png">
            <p id="navbarmenu"><b>Graphics</b></p>
            <p id="navbarmenu"><b>Financials</b></p>
            <p id="navbarmenu"><b>News</b></p>
            <p id="logo"><b>Logo</b></p>
        </div>

    <section id="registerform">
      <form method="post" action="index.php">
      <div id="registerBox">
        <div class="BoxTitle"><h1>SING UP</h1></div>
        <input id="email" type="email" placeholder="Email" required>
        <input id="password" type="password" placeholder="password" required>
        <input id="password1" type="password" placeholder="password" required>
        <input id="username" type="text" name="telephone" placeholder="username" required>
        <button type="submit" id="button" class="colorbutton" name="LOG IN"><h2>SING UP</h2></button>
        <p><a href="index.html"><h3>LOG IN</h3></a></p>
      </div>
      </form>
    </section>


    <section class="footer">
      <p id="textfooter">El pasaje estándar Lorem Ipsum, usado desde el año 1500. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."El pasaje estándar Lorem Ipsum, usado desde el año 1500.El pasaje estándar Lorem Ipsum, usado desde el año 1500. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."El pasaje estándar Lorem Ipsum, usado desde el año 1500. </p>
    </section>
  </body>
</html>
