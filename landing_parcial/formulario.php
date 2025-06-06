<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars(trim($_POST["nombre"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $asunto = htmlspecialchars(trim($_POST["asunto"]));
  $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

  if (!$nombre || !$email || !$asunto || !$mensaje) {
    $respuesta = "<p>Por favor completá todos los campos.</p>";
  } else {
    $respuesta = "
      <h2>¡Gracias, $nombre!</h2>
      <p>Recibimos tu mensaje sobre <strong>$asunto</strong>. Pronto te responderemos a <strong>$email</strong>.</p>
      <a href='index.html#contacto' class='boton-volver'>Volver a la página principal</a>
    ";
  }
} else {
  $respuesta = "<p>Acceso inválido.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mensaje enviado | Café Néctar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <div class="respuesta">
    <?php echo $respuesta; ?>
  </div>

</body>
</html>
