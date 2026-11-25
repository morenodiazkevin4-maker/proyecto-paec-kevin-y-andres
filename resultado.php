<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del compromiso</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <h1>¡Gracias por participar!</h1>

    <?php
    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
    $edad = htmlspecialchars($_POST["edad"] ?? "");
    $grupo = htmlspecialchars($_POST["grupo"] ?? "");
    $residuo = htmlspecialchars($_POST["residuo"] ?? "");
    $separa = htmlspecialchars($_POST["separa"] ?? "");
    $accion = htmlspecialchars($_POST["accion"] ?? "");
    $compromiso = htmlspecialchars($_POST["compromiso"] ?? "");
    $comentario = htmlspecialchars($_POST["comentario"] ?? "");
    $botellas = (int)($_POST["botellas"] ?? 0);
    $mes = $botellas * 4;

    echo "<p>Hola, <b>$nombre</b>. Tu compromiso quedó registrado.</p>";
    echo "<p><b>Edad:</b> $edad</p>";
    echo "<p><b>Grupo:</b> $grupo</p>";
    echo "<p><b>Residuo que generas más:</b> $residuo</p>";
    echo "<p><b>¿Separas tus residuos?:</b> $separa</p>";
    echo "<p><b>Acción que realizas:</b> $accion</p>";
    echo "<p><b>Tu compromiso:</b> $compromiso</p>";
    echo "<p><b>Comentario o propuesta:</b> $comentario</p>";
    echo "<h2>Resultado del reto</h2>";
    echo "<p>Si evitas usar $botellas botellas por semana, en cuatro semanas podrías evitar aproximadamente $mes botellas.</p>";
    echo "<p>¡Cada acción cuenta para cuidar nuestro entorno!</p>";
    ?>

    <p><a href="index.html">Volver al inicio</a></p>

</body>
</html>
