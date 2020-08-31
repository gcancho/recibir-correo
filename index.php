<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario de contacto</title>
</head>

<body>
    <form action="correo.php"  id="form" onsubmit="return validarFormulario();" method="post">
        <input type="text" placeholder="nombre" name="nombre" id="nombre">
        <input type="email" placeholder="correo" name="correo" id="correo">
        <input type="text" placeholder="telefono" name="telefono" id="telefono">
        <textarea placeholder="mensaje" name="mensaje"></textarea>
        <input type="submit" name="enviar">
        <p class="warnings" id="warnings"></p>
    </form>

    <script src="validacion.js"></script>
</body>


</html>