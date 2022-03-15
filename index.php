<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso Arrays</title>
</head>

<body>
    <?php

    // 1

    // 1.1
    // $coches = array("Volvo", "BMW", "Toyota");

    // 1.2
    $coches = ["Volvo", "BMW", "Toyota"];

    // 1.3
    sort($coches);

    // 1.4
    echo "Numero coches: " . count($coches) . "<br>";

    // 1.5
    echo "<table>";
    echo "<tr><td>Marca</td></tr>";
    foreach ($coches as $coche) {
        echo "<tr><td>$coche</td></tr>";
    }
    echo "</table>";

    // 1.6
    echo "<select>";
    foreach ($coches as $coche) {
        echo "<option value='$coche'>$coche</option>";
    }
    echo "</select>";

    // 1.7
    $coches_stock = array(
        "Volvo" => 35,
        "BMW" => 20,
        "Toyota" => 15,
    );

    echo "<br>";

    foreach ($coches_stock as $coche => $stock) {
        echo "$coche tenemos $stock vehiculos <br>";
    }

    ksort($coches_stock);

    echo "<table>";
    echo "<tr><td>Marca</td><td>Stock</td></tr>";
    foreach ($coches_stock as $coche => $stock) {
        echo "<tr><td>$coche</td><td>$stock</td></tr>";
    }
    echo "</table>";

    // 2

    $usuarios = array(
        "neo" => "Alfredo Jiménez Gutiérrez",
        "fran1980" => "Francisco Almerio Sánchez",
        "bea" => "Beatriz Lima Marquez",
    );

    foreach ($usuarios as $nick => $name) {
        echo "$nick $name <br>";
    }

    echo "<br>";
    asort($usuarios);

    foreach ($usuarios as $nick => $name) {
        echo "$name <br>";
    }

    echo "<br>";
    ksort($usuarios);

    foreach ($usuarios as $nick => $name) {
        echo "$nick <br>";
    }

    echo "<table>";
    echo "<tr><td>Nick</td><td>Name</td></tr>";
    foreach ($usuarios as $nick => $name) {
        echo "<tr><td>$nick</td><td>$name</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>