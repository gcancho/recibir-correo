<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario de contacto</title>
</head>

<body>
    <form action="correo.php" method="POST">
        <input type="text" placeholder="nombre" name="nombre" required>
        <input type="text" placeholder="telefono" name="telefono">
        <input type="email" placeholder="correo" name="correo" required>
        <textarea placeholder="mensaje" name="mensaje"></textarea>
        <input type="submit" name="enviar">
    </form>

</body>

</html>