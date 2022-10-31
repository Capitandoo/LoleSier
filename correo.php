<?php
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];
        $email = $_POST['email'];
        $campos = array();
        if($nombre == ""){
            array_push($campos, "El campo nombre no puede estar vacío");
        }
        if($email == "" || strpos($email, "@") === false){
            array_push($campos, "Ingresa un correo electrónico válido");
        }
        if(count($campos) > 0){
            echo "<div class='error'>";
            for($i = 0; $i < count($campos); $i++){
                echo "<li>".$campos[$i]."</i>";
            }
        }
        else{
            echo "<div class='correcto'>Datos correctos";
            echo "<script> setTimeout (\"location.href = 'contactame-ahora.html'\", 1000) </script>";
        }
        echo "</div>";
    }

$destinatario = 'info@lolesier.com.ar';
$asunto = "Consulta";

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nombre <$email> \r\n";
$headers.= "To: <info@lolesier.com.ar> \r\n";

mail($destinatario, $asunto, $body, $headers );

?>