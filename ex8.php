<!DOCTYPE html>
<html>
<head>
    <title>Vérification de nombre pair ou impair</title>
</head>
<body>
    <h1>Vérification de nombre pair ou impair</h1>

    <form method="POST" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="submit" name="verifier" value="Vérifier">
    </form>

    <?php
    if (isset($_POST['verifier'])) {
        $nombre = $_POST['nombre'];
        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "$nombre est un nombre pair.";
            } else {
                echo "$nombre est un nombre impair.";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    }
    ?>
</body>
</html>
