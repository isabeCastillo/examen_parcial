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
