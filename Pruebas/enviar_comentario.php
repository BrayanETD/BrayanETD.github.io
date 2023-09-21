<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    $destinatario = "brayan.etd.321@gmail.com";
    $asunto = "Comentario del sitio web";
    $mensaje = "Correo Electrónico: $correo\n\nComentario:\n$comentario";
    $enviado = mail($destinatario, $asunto, $mensaje);
    
    if ($enviado) {
        header("Location: contacto.php");
    } else {
        echo "Hubo un error al enviar el correo. Por favor, inténtalo de nuevo.";
    }
}
?>
