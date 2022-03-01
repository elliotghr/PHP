<?php
// Eliminamos su valor y con -1 caducamos la cookie
setcookie("idioma_solicitado", "", time() - 1, "/");
?>
<a href="usar-cookie.php">Regresar</a>