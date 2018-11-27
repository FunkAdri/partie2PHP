<?php

// On crée une variable boolean 
$var = random_int(0, 1);

echo 'Le contenu de $maVariable est ' . $var . '<br />';

if ($var == false) {
    echo 'C\'est pas bon!!';
} else {
    echo 'C\'est ok!!';
}
?>