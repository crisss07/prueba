<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Validar los datos (aquí puedes agregar más validaciones)
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($mensaje)) {
        // Aquí puedes enviar el correo o guardar los datos en la base de datos
        // Por ejemplo, enviar un correo
        $destinatario = "rodri07crisss@gmail.com"; // Cambia esto por tu correo
        $asunto = "Nuevo mensaje de contacto";
        $cuerpo = "Correo: $correo\nMensaje: $mensaje";
        $headers = "From: $correo";

        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Error al enviar el mensaje.";
        }
    } else {
        echo "Por favor, completa todos los campos correctamente.";
    }
}
?>
