<?php
    $destino = "info@proteinaycultura.org.ar";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $asunto = "Enviado desde la Web de Proteina y Cultura para la Fundación";
    $contenido = "Nombre: ".$nombre."\nApellido: ".$apellido."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    mail($destino,"contacto",$contenido);
    header("Location:redirect.html");
?>