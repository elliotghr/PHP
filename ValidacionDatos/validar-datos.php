<?php

$nombre = "Jon";
$password = "Mircha";

if (isset($_GET["enviar_hdn"])) {
    if ($nombre === $_GET["nombre_txt"] && $password === $_GET["password_txt"]) {
        echo "El nombre que ingresaste por GET es: " . $_GET["nombre_txt"] . "<br>";
        echo "El password que ingresaste por GET es: " . $_GET["password_txt"] . "<br>";
        echo "El sexo que seleccionaste es: " . $_GET["sexo_rdo"] . "<br>";
    } else {
        // Sirve para dirigir el flujo de una aplicación
        header("Location: formulario.php?error=si");
    }
} else if (isset($_POST["enviar_hdn"])) {
    if ($nombre === $_POST["nombre_txt"] && $password === $_POST["password_txt"]) {
        echo "El nombre que ingresaste por POST es: " . $_POST["nombre_txt"] . "<br>";
        echo "El password que ingresaste por POST es: " . $_POST["password_txt"] . "<br>";
        echo "El sexo que seleccionaste es: " . $_POST["sexo_rdo"] . "<br>";
    } else {
        // Sirve para dirigir el flujo de una aplicación
        header("Location: formulario.php?error=si");
    }
}
