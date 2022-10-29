<?php
    $destinatario = 'info@lolesier.com.ar';
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de Lole Sier";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script> alert ('correo enviado exitosamete') </script>";
    echo "<script> setTimeout (\"location.href = 'contactame-ahora.html'\", 1000) </script>";

?>