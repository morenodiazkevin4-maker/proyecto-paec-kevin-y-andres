<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi compromiso con el reciclaje</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <h1>Mi compromiso con el reciclaje</h1>
    <div class="menu">
        <a href="index.html">Inicio</a>
        <a href="pags.html">Información</a>
    </div>

    <form action="resultado.php" method="POST">

        <p>1. Nombre:</p>
        <input type="text" name="nombre" required>

        <p>2. Edad:</p>
        <input type="number" name="edad" min="1" required>

        <p>3. Grupo:</p>
        <input type="text" name="grupo" required>

        <p>4. Residuo que genera con mayor frecuencia:</p>
        <select name="residuo" required>
            <option value="">Selecciona una opción</option>
            <option>Papel y cartón</option>
            <option>Plástico</option>
            <option>Metal</option>
            <option>Vidrio</option>
            <option>Residuos orgánicos</option>
        </select>

        <p>5. ¿Separas tus residuos?</p>
        <input type="radio" name="separa" value="Sí" required> Sí
        <input type="radio" name="separa" value="No"> No
        <input type="radio" name="separa" value="Algunas veces"> Algunas veces

        <p>6. ¿Qué acción realizas para cuidar el ambiente?</p>
        <textarea name="accion" required></textarea>

        <p>7. Selecciona un compromiso:</p>
        <select name="compromiso" required>
            <option value="">Selecciona una opción</option>
            <option>Reducir el uso de plástico</option>
            <option>Separar residuos</option>
            <option>Reutilizar materiales</option>
            <option>Participar en campañas</option>
            <option>Reciclar aparatos electrónicos</option>
        </select>

        <p>8. Comentario o propuesta:</p>
        <textarea name="comentario"></textarea>

        <h2>Reto especial: menos botellas de plástico</h2>
        <p>¿Cuántas botellas de plástico crees que puedes evitar usar en una semana?</p>
        <input type="number" name="botellas" min="0" max="500" value="0" required>

        <p><input type="submit" value="Enviar compromiso"></p>

    </form>

    <p><a href="index.html">Volver al inicio</a></p>

</body>
</html>
