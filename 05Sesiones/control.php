<!-- Archivo que va a validar los datos -->
<?php
if ($_POST["usuario_txt"] == "bextlan" && $_POST["password_txt"] == "1234") {
    // Inicio la sesion
    session_start();
    // Declaro mis variables de sesion
    // Nos permitirá saber si la sesion sigue vigente
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $_POST["usuario_txt"];
    // Enviaremos el flujo de la ejecucion
    header("Location: archivo-protegido.php");
} else {
    header("Location: index.php?error=si");
}
