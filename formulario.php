<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "rbejarano577@gmail.com"; // Cambia esto al correo deseado
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
    
    // Envía el correo
    mail($destinatario, $asunto, $contenido);
    
    // Redirige a una página de confirmación o muestra un mensaje de éxito
    header("Location: confirmacion.html");
    exit;
}
?>
