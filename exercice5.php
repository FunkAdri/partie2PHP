<?php

// On crée une variable
$gender = 'homme';
// On affiche le contenue de la variable
echo 'le contenu de ma variable $gender est ' . $gender . '<br />';
// On donne des conditions d'affichage qui se mettront en dessous du premier echo
if ($gender = 'homme') {
    echo 'C\'est un développeur !!!';
} else {
    echo 'C\'est une développeuse !!!';
}
?>