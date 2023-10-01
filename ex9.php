<!DOCTYPE html>
<html>
<head>
    <title>Test de nombre multiple de 3 et 5</title>
</head>
<body>
    <h1>Test de nombre multiple de 3 et 5</h1>

    <form method="POST" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre"><br>
        <input type="submit" name="tester" value="Tester">
    </form>

    <?php
    if (isset($_POST['tester'])) {
        $nombre = $_POST['nombre'];
            if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                echo "$nombre est un multiple de 3 et de 5.";
            } else {
                echo "$nombre n'est pas un multiple de 3 et de 5.";
            }
        } else {
            echo "Veuillez entrer un nombre valide.";
        }
    ?>
</body>
</html>
