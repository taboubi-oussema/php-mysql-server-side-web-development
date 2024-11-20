
<?php

require_once 'connexion.php';

$req = $connexion->query("select * from etudiant");
$res = $req->fetchAll();


echo '<table border=2>';
echo '<th>ID</th>';
echo '<th>Nom et prenom</th>';
echo '<th>niveau</th>';
echo '<th>inscription</th>';
echo '<th>Payement</th>';
foreach ($res as $etudiant) {
    echo "<tr><td>" . $etudiant['id'] . "</td>";
    echo "<td>" . $etudiant['Nom_et_prenom'] . "</td>";
    echo "<td>" . $etudiant['niveau'] . "</td>";
    echo "<td>" . $etudiant['inscription'] . "</td>";
    echo "<td>" . $etudiant['Payement'] . "</td>";

    echo '<td><button><a href="index.php?id='.$etudiant['id'].'">Modifier</a></button></td>';

    echo '<td><button><a href="afficher.php?id=' .  $etudiant['id'] . '">Supprimer</a></button></td></tr>';
}


echo '</table>';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $connexion->prepare("DELETE FROM etudiant WHERE id = ?");
    $stmt->execute([$id]);
    header("Location:afficher.php");
}


?>