
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$base = "etudiant";

try {

    $connexion = new pdo("mysql:host=$servername;dbname=$base", $username, $password);
} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
}

?>