<!DOCTYPE html>
<html>
<head>
    <title>Calcul sur les variables</title>
</head>
<body>
    <h1>Calcul sur les variables</h1>

    <?php
    $TVA = 0.2;
    $PRIX = 150;
    $Nombre = 10;
    $PrixHT = $PRIX * $Nombre;
    $PrixTTC = $PrixHT * (1 + $TVA);
    echo "Prix HT pour les $Nombre articles : $PrixHT €<br>";
    echo "Prix TTC pour les $Nombre articles : $PrixTTC €";
    ?>
</body>
</html>
