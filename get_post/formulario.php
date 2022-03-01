<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- GET -->
    <section>
        <h2>Formulario enviado por el metodo GET</h2>
        <!-- Como está en la misma carpeta solo se pone el nombre del archivo en action -->
        <!-- method: GET envía los datos a través de la url, POST los envía encriptados -->
        <!-- enctype: texto plano, multipart form data para enviar un fichero -->
        <!-- El nombre es como PHP va a reconocer los datos del formulario -->
        <form action="envia-datos.php" name="envia-get-frm" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="">Ingresa tu nombre</label>
            <br>
            <input type="text" name="nombre_txt">
            <br>
            <label for="">Ingresa tu password</label>
            <br>
            <input type="password" name="password_txt">
            <br>
            <input type="submit" name="enviar_btn" value="Envía-GET">
        </form>
    </section>

    <!-- POST -->
    <section>
        <h2>Formulario enviado por el metodo POST</h2>
        <form action="envia-datos.php" name="envia-post-frm" method="POST" enctype="application/x-www-form-urlencoded">
            <label for="">Ingresa tu nombre</label>
            <br>
            <input type="text" name="nombre_txt">
            <br>
            <label for="">Ingresa tu password</label>
            <br>
            <input type="password" name="password_txt">
            <br>
            <input type="submit" name="enviar_btn" value="Envía-POST">
        </form>
    </section>
</body>

</html>