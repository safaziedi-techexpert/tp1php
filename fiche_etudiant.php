<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Fiche étudiant</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Informations de l'étudiant
// (déclarées en haut du script)
 
$nom = "Ali Ben Salem";
// string : nom complet
 
$filiere = "Info";
// string : filière d'étude
 
$moyenne = 13.5;
// float : moyenne générale
 
$estBoursier = true;
// bool : bénéficie d'une bourse
 
$anneeEtude = 2;
// int : année d'étude

switch ($filiere) {
    case "Info":
        $labelFiliere = "Informatique";
        $classeBadge  = "badge-info";
        break;
    case "Elec":
        $labelFiliere = "Électronique";
        $classeBadge  = "badge-elec";
        break;
    default:
        $labelFiliere = "Filière inconnue";
        $classeBadge  = "badge-defaut";
}

if ($moyenne >= 10) {
    $statut = "Admis(e)";
} else {
    $statut = "Non admis(e)";
}

?>
 
  <div class="fiche">
    <h1><?php echo $nom; ?></h1>
    <span class="badge <?php echo $classeBadge; ?>">
      <?php echo $labelFiliere; ?>
    </span>
    <p><?php echo $statut; ?></p>
    <?php if ($estBoursier) { ?>
      <p>🎓 Boursier</p>
    <?php } ?>
  </div>
</body>
</html>
