<?php
    // Cuando se envian los datos por el metodo GET se crea una var global de tipo arreglo $_GET
    // isset Evalua si existe la variable dentro de los parentesis
    // Hacemos uso del name del boton
    if (isset($_GET["enviar_btn"])) {
        echo "Los datos los enviaste por el metodo GET, los datos son: <br> El nombre es: ". $_GET["nombre_txt"]. "<br> El Password es: ". $_GET["password_txt"];
    } else if (isset($_POST["enviar_btn"])){
        echo "Los datos los enviaste por el metodo POST, los datos son: <br> El nombre es: ". $_POST["nombre_txt"]. "<br> El Password es: ". $_POST["password_txt"];
    }
