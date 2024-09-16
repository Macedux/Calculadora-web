<?php
// Verifica si se han enviado los datos mediante el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los valores del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Inicializa una variable para el resultado
    $resultado = 0;

    // Realiza la operación seleccionada
    if ($operacion == 'multiplicacion') {
        $resultado = $num1 * $num2;
        $operacion_realizada = "multiplicacion";
    } elseif ($operacion == 'division') {
        $resultado = $num1 / $num2;
        $operacion_realizada = "division";
    }

    // Muestra el resultado
    echo "<h1>Resultado de la $operacion_realizada</h1>";
    echo "<p>$num1 $operacion_realizada $num2 = $resultado</p>";
    echo '<a href="index.html">Volver a la calculadora</a>';
} else {
    // Si se intenta acceder directamente a calculadora.php sin enviar el formulario
    echo "No se ha enviado ningún dato.";
}
?>