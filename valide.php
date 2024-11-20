<?php
include_once "etudiant.php";
include_once "connexion.php";

if (isset($_POST['npr'], $_POST['radio'], $_POST['semestre'], $_POST['payement'])) {
    $nom_pre = $_POST['npr'];
    $niveau = $_POST['radio'];
    $inscription = $_POST['semestre'];
    $Payement = $_POST['payement'];
    $id = $_POST['id'] ;
   

    for ($i = 0; $i < count($inscription); $i++) {
        $inscription[$i] .= " ";
    }
    $inscription = implode("", $inscription);


    $req1 = $connexion->query("SELECT * FROM etudiant WHERE Nom_et_prenom='$nom_pre' AND niveau='$niveau' AND inscription='$inscription' AND Payement='$Payement'");
    if (count($req1->fetchAll()) > 0) {
        echo 'Student already exists.';
    } else {
        if ($id!=0) {

            $stmt = $connexion->exec("UPDATE etudiant SET Nom_et_prenom='$nom_pre', niveau='$niveau', inscription='$inscription', Payement='$Payement' WHERE id = $id");

            if ($stmt == 0) {
                echo "echec UPDATE";
            } else {
                header('Location: afficher.php');
                exit();
            }
        } else {

            $etudiant = new Etudiant($nom_pre, $niveau, $inscription, $Payement);
            require_once "ajouter.php";
        }
    }
} else {
    echo "Form data is missing.";
}
