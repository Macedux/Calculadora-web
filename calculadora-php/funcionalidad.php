<?php
// Verificar si los números han sido enviados a través de POST
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = (float)$_POST['num1']; // Convertimos los números a tipo float por si son decimales
    $num2 = (float)$_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    // Realizar la operación de acuerdo al valor de "operation"
    if ($operation == 'sum') {
        $result = $num1 + $num2;
        $operation_name = "Suma";
    } elseif ($operation == 'rest') {
        $result = $num1 - $num2;
        $operation_name = "Resta";
    }

    // Mostrar el resultado
    echo "<h1>Resultado de la $operation_name</h1>";
    echo "<p>$num1 y $num2 = $result</p>";
    echo "<a href='index.html'>Volver a la calculadora</a>";
} else {
    echo "Error: no se recibieron los datos correctamente.";
}
?>
