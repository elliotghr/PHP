<!-- Todos los archivos seguros deben validar que la sesion siga activa -->
<?php
include_once("sesion.php");
?>
<h1>
    Bienvenido:
</h1>
<?php
echo $_SESSION["usuario"];
?>
<br><br>
<h2>Estás en otra pagina segura con sesiones PHP</h2>
<br><br>
<a href="archivo-protegido.php">Ir a la primer pagina segura</a>
<br>
<a href="salir.php">Salir</a>