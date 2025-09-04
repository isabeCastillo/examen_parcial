<?php
$temperatura = "";
$tipo = "";
$mensaje = "";
if (empty ($temperatura) || empty ($tipo)) {
    if (!is_float($temperatura)) {
        $mensaje = "Por favor, solo ingresar numeros";
    } elseif (trim($tipo)) {
        $mensaje = "Selecciona una opcion";
    }
} else {
    if ($fahrenheit) {
        $fahrenheit = ($fahrenheit * 9/5) + 32;
        $mensaje = "La temperatura .$fahrenheit es: ";
    }elseif ($celsius) {
        $celsius = ($fahrenheit - 32) *5/9;
    }else {
        $mensaje = "";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperatura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de temperatura</h1>
    <form action="" method="post">
        <input type="number" name="temperatura" id="" placeholder="Ingrese la temperatura"><br><br>

        <label for="">Selecciona que conversion deseas</label>
        <select name="tipo" id="" disabled="disabled">
        </select>
        <button type="submit">Calcular</button>
    </form>

</body>
</html>