
<?php

require_once 'valide.php';
require_once 'connexion.php';




$nom_pre = $etudiant->getNomPre();
$niveau = $etudiant->getNiveau();
$inscription = $etudiant->getInscription();
$Payement = $etudiant->getPayement();


$req = "INSERT INTO etudiant (Nom_et_prenom,niveau,inscription,Payement) VALUES ('$nom_pre', '$niveau', '$inscription', '$Payement')";
$res = $connexion->exec($req);
if ($res == 0)
    echo "echec d'ajout";
else
    header("Location:afficher.php");
?>