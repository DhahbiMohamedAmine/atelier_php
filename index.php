<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
    <h1>Liens vers les exercices</h1>

    <?php
    echo "<h2>Utilisation de include :</h2>";
    include 'menu.php';
    display_menu();

    echo "<h2>Utilisation de require :</h2>";
    require 'menu.php';
    display_menu();
    ?>

</body>
</html>
