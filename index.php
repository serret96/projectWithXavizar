<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTAKO TEST</title>

    <link rel="stylesheet" href="./home/css/home.css">
    <script src="./home/js/home.js"></script>
</head>
<body>
    <header>
        <h1>WELCOME OTAKO TRADE</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="login/login-access.php" method="post">
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="login_txt" type="text" placeholder="Introducir username" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password_txt" type="password" placeholder="Introducir Password">
                <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Entrar</button>
            </div>
            <div class="info_div">
                <p>Aun no estas registrado? <a href="register/reg-form.php">Registrate!</a></p>
            </div>
        </form>
    </main>
    <footer>
        <p>Desarrollado por <a href="#">SERRET OTAKO&trade;</a></p>
    </footer>
</body>
</html>