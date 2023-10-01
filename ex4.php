<!DOCTYPE html>
<html>
<head>
    <title>Script PHP</title>
</head>
<body>

<?php
$Nom = "CHERIF";
$Pre = "Nidhal";
echo "Contenu des variables sur une seule ligne : $Nom $Pre<br>";
echo "Contenu des variables sur deux lignes : <br>$Nom<br>$Pre<br>";
echo "<table border='1'>
        <tr><td>Nom</td><td>Prénom</td></tr>
        <tr><td>$Nom</td><td>$Pre</td></tr>
      </table>";
$info = $Nom . " " . $Pre;
echo "<script>alert('$info');</script>";
?>

</body>
</html>
