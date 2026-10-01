<?php
// 1. Déclaration des variables
$age = 20;
$estEtudiant = true;

// 2. Détermination du prix avec les conditions
if ($age < 12) {
    $prix = 5;
} elseif ($estEtudiant == true) { // Ou simplement: elseif ($estEtudiant)
    $prix = 7;
} else {
    $prix = 10;
}

// Petite condition simple pour afficher "Oui" ou "Non" au lieu de true/false
if ($estEtudiant == true) {
    $texteEtudiant = "Oui";
} else {
    $texteEtudiant = "Non";
}

// 3. Affichage
echo "=== TICKET DE CINÉMA ===<br>";
echo "Âge : " . $age . " ans<br>";
echo "Étudiant : " . $texteEtudiant . "<br>";
echo "Prix du billet : " . $prix . " €<br>";
?>