<?php

// On crée deux variables
$age = 24;
$genre = 'homme';
// À la différence des if des exercices précendent on met en place là deux conditions pour afficher quelque chose et on ajoute un elseif
if (($age <= 18) AND ( $genre == 'femme')) {
    echo 'Vous êtes une femme mineure';
} elseif (($age <= 18) AND ( $genre == 'homme')) {
    echo 'Vous êtes un homme mineur';
} elseif (($age > 18) AND ( $genre == 'femme')) {
    echo 'Vous êtes une femme majeure';
} else {
    echo 'Vous êtes un homme majeur';
}
?>