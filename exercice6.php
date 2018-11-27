<?php

// On crée une variable
$monAge = 24;
// On affiche la variable
echo 'le contenu de ma variable est $monAge' . $monAge . '<br />';
// Comme à l'exercice on donne des conditions qui affichera un echo
if ($monAge <= 18) {
    echo 'Tu n\'es pas majeur';
} else {
    echo 'Tu es majeur';
}
?>