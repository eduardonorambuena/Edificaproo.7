<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $envio = htmlspecialchars($_POST['envio']);

    // Configura tu dirección de correo aquí
    $destinatario = "edificapro7@gmail.com"; // Cambia esto a tu correo electrónico

    if ($envio == "correo") {
        $asunto = "Nuevo contacto de $nombre";
        $cuerpo = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nServicio: $servicio\nMensaje: $mensaje";
        
        // Para enviar correo
        if (mail($destinatario, $asunto, $cuerpo)) {
            echo "Mensaje enviado a tu correo.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } elseif ($envio == "whatsapp") {
        $mensajeWhatsapp = urlencode("Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nServicio: $servicio\nMensaje: $mensaje");
        $numeroWhatsapp = "56930077799"; // Cambia esto a tu número de WhatsApp
        header("Location: https://wa.me/$numeroWhatsapp?text=$mensajeWhatsapp");
        exit();
    }
}
?>
