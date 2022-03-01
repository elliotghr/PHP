<?php

// Instruccion para crear una cookie
// Nombre de la cookie, Valor, Duración de la cookie 86400=24h, Donde va a convivir la cookie (opcional) y el Dominio donde va aexistir la cooki (Opcional)
// Para que la cookie funcione se tiene que especificar la ruta del directorio en el cuatro parametro con "/", se entiende que la cookie existirá en todo el directorio del sitio
setcookie("idioma_solicitado", $_GET["idioma"], time() + 86400, "/");
header("Location: usar-cookie.php");