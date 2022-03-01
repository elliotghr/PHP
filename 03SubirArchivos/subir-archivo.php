<?php

// Cuando se envia un archivo se genera una variable global llamado $_FILES
// Cuando se manda un archivo al servidor se generan 5 propiedades
// Name
// Type
// tmp_name Los guarda en una carpeta temporal y pueden existir por varios procesos diferentes a la carga de archivos, es un archivo dinamico
// error Propiedad BOOLEAN
// size Tamaño en bytes


// Vas a recorrer el archivo $_FILES y en cada llave me vas a traer el valor que tiene
foreach ($_FILES["archivo_fls"] as $key => $value) {
    echo "Propiedad: $key --- Valor: $value <br>";
}

var_dump($_FILES["archivo_fls"]);

// SUBIR EL FICHERO AL SERVIDOR
$archivo = $_FILES["archivo_fls"]["tmp_name"];
// Le dejaremos el mismo nombre al archivo
$destino = "archivos/" . $_FILES["archivo_fls"]["name"];

if ($_FILES["archivo_fls"]["type"] === "audio/mpeg") {
    // Permite subir ficheros al servidor
    // Necesita el archivo temporal y la ruta
    move_uploaded_file($archivo, $destino);
    echo "Archivo Subido :3 <br> <a href=\"enviar-archivo.php\">REGRESAR</a>";
} else {
    echo "Solo se permite subir archivos de audio <br> <a href=\"enviar-archivo.php\">REGRESAR</a>";
}
