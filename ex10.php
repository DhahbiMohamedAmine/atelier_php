<?php
$nombre = rand(); 

while ($nombre % 2 != 0) {
    $nombre = rand();
}

echo "Le premier entier pair obtenu par tirage aléatoire est : $nombre";
?>
