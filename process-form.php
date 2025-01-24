<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configuración del correo
    $to = "sebastiandiazdiaz2818@gmail.com"; // Reemplaza con el correo al que deseas enviar los datos
    $subject = "Nuevo mensaje de contacto";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "¡Mensaje enviado correctamente!";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo más tarde.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
