<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Archivo</title>
</head>

<body>
    <!-- Con multipart/form-data le indicamos que vamos a enviar un fichero binario al servidor  -->
    <form method="post" name="enviar_archivo_frm" action="subir-archivo.php" enctype="multipart/form-data">
        <input type="file" name="archivo_fls">
        <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>
</body>

</html>