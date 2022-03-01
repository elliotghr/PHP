<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones con PHP</title>
    <style>
        form {
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }

        span {
            color: #F00;
            font-size: 2em;
        }
    </style>
</head>

<body>
    <!-- Pequeño formulario que pedirá usuario y contraseña y con control.php se validará la información -->
    <form action="control.php" name="autenticación_frm" method="post">
        <?php
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

        if ($_GET["error"] == "si") {
            echo "<span>Verifica tus datos</span>";
        } else {
            echo "<span>Introduce tus datos</span>";
        }
        ?>
        <br><br>
        <label for="user">Usuario</label>
        <br>
        <input type="text" name="usuario_txt" id="user">
        <br>
        <label for="pass">Password</label>
        <br>
        <input type="text" name="password_txt" id="pass">
        <br>
        <input type="submit" name="entrar_btn" value="Entrar">
    </form>
</body>

</html>