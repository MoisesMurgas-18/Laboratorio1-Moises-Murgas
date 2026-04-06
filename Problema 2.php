<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área de una circunferencia</title>
</head>
<body>

    <h2>Calcular el área de una circunferencia</h2>

    <form method="post">
        Ingrese el radio:
        <input type="number" name="radio" step="any" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST["radio"];
        $area = round(pi() * ($radio * $radio));

        echo "<p>El área de la circunferencia es: $area</p>";
    }
    ?>

</body>
</html>