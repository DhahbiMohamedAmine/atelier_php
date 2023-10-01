<!DOCTYPE html>
<html>
<head>
    <title>Comparaison de deux valeurs réelles</title>
</head>
<body>
    <h1>Comparaison de deux valeurs réelles</h1>

    <form method="POST" action="">
        <label for="a">Entrez la première valeur réelle :</label>
        <input type="text" name="a" id="a"><br>

        <label for="b">Entrez la deuxième valeur réelle :</label>
        <input type="text" name="b" id="b"><br>

        <input type="submit" name="comparer" value="Comparer">
    </form>

    <?php
    if (isset($_POST['comparer'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a <=> $b;

            switch ($result) {
                case -1:
                    echo "$a est inférieur à $b";
                    break;
                case 0:
                    echo "$a est égal à $b";
                    break;
                case 1:
                    echo "$a est supérieur à $b";
                    break;
            }
        } else {
            echo "Veuillez entrer des valeurs numériques valides.";
        }
    }
    ?>
</body>
</html>
