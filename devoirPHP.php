<?php
function afficher_carres($nombre_initial, $nombre_final) {
    if ($nombre_initial <= $nombre_final) {
        $nombre = $nombre_initial;

        while ($nombre <= $nombre_final) {
            $carre = $nombre ** 2;
            echo "Le carré de $nombre est $carre\n";
            $nombre++;
        }
    } else {
        echo "Le nombre initial doit être inférieur ou égal au nombre final.\n";
    }
}

echo "Entrez le nombre initial : ";
$nombre_initial = intval(fgets(STDIN));

echo "Entrez le nombre final : ";
$nombre_final = intval(fgets(STDIN));

afficher_carres($nombre_initial, $nombre_final);
?>
