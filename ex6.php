<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'addition</title>
</head>
<body>
    <h1>Formulaire d'addition</h1>

    <form method="POST" action="">
        <label for="valeur1">Première valeur :</label>
        <input type="text" name="valeur1" id="valeur1"><br>

        <label for="valeur2">Deuxième valeur :</label>
        <input type="text" name="valeur2" id="valeur2"><br>

        <input type="submit" name="calculer" value="Calculer">
    </form>

    <?php
    if (isset($_POST['calculer'])) {
        $valeur1 = $_POST['valeur1'];
        $valeur2 = $_POST['valeur2'];
        if (is_numeric($valeur1) && is_numeric($valeur2)) {
            $resultat = $valeur1 + $valeur2;
            echo "Résultat : $valeur1 + $valeur2 = $resultat";
        } else {
            echo "Veuillez saisir des nombres valides.";
        }
    }
    ?>
</body>
</html>
