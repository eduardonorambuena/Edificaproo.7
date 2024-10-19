<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $contacto_preferencia = htmlspecialchars($_POST['contacto-preferencia']);

    $to = "edificapro7@gmail.com"; // Correo de destino
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nServicio: $servicio\nMensaje: $mensaje";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        // Redirigir según la preferencia de contacto
        if ($contacto_preferencia === 'whatsapp') {
            // Redirigir a WhatsApp
            header("Location: https://api.whatsapp.com/send?phone=56930077799&text=Hola!%20Me%20interesa%20el%20servicio:%20$servicio%0A%0A$mensaje");
            exit();
        } else {
            // Mensaje de éxito
            echo "Mensaje enviado correctamente. Te responderemos pronto.";
        }
    } else {
        echo "Error al enviar el mensaje. Inténtalo de nuevo.";
    }
} else {
    echo "Método no permitido.";
}
?>
