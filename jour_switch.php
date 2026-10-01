<?php
$jour = 5;
 
switch ($jour) {
            case 1: $nomJour = "Lundi"; break;
  case 2: $nomJour = "Mardi"; break;
  case 3: $nomJour = "Mercredi"; break;
  case 4: $nomJour = "Jeudi"; break;
  default: $nomJour = "Autre jour";
}
 
echo $nomJour; // lundi
?>