<?php

$utilisateur = [
    "nom" => "Alice",
    "age" => 25,
    "estAdmin" => true
];

echo "=== 1. TEST AVEC ECHO ===<br>";
// echo fonctionne bien sur du texte/nombre simple :
echo "Nom : " . $utilisateur["nom"] . "<br>"; 
// ATTENTION : 'echo $utilisateur;' afficherait juste "Array" avec un avertissement.


echo "<br>=== 2. TEST AVEC PRINT_R ===<br>";
// Affiche la structure proprement (lisible) :
print_r($utilisateur);


echo "<br><br>=== 3. TEST AVEC VAR_DUMP ===<br>";
// Affiche la structure AVEC les types et les longueurs :
var_dump($utilisateur);