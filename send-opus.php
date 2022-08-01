<?php
    $destino = "info@proteinaycultura.org.ar";
    $nombre = $_POST["nombre-opus"];
    $apellido = $_POST["apellido-opus"];
    $correo = $_POST["correo-opus"];
    $mensaje = $_POST["mensaje-opus"];
    $asunto = "Enviado desde la Web de Proteina y Cultura para OpusOperaPop";
    $contenido = $asunto."\nNombre: ".$nombre."\nApellido: ".$apellido."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    mail($destino,"contacto",$contenido);
    header("Location:redirect.html");
?>