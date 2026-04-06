<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular área y perímetro</title>
</head>
<body>

    <form method="post">
        <label for="radio">Ingrese el radio:</label>
        <input type="number" name="radio" id="radio" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST["radio"];

        if ($radio >= 0) {
            $area = round(pi() * ($radio ** 2), 2);
            $perimetro = round (2 * pi() * $radio, 2);

            echo "<h3>Resultados</h3>";
            echo "<p>Radio: $radio</p>";
            echo "<p>Área: $area</p>";
            echo "<p>Perímetro: $perimetro</p>";
        } else {
            echo "<p>Por favor, ingrese un valor válido para el radio.</p>";
        }
    }
    ?>

</body>
</html>