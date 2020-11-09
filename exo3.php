<?php
// Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97”

//Je me connecte a ma bdd
//Crée une requette pour indicquer la selection
//Faire le tri
// Afficher
//----------------------------------------------------------------------------------------------------------------------

//je me connect à ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=cataloguedépartementfr;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//Crée une requette pour indicquer la selection

$pdostat = $pdo->query("SELECT * FROM departement" );

//J'affiche
while ($donnee = $pdostat->fetch()){
    echo $donnee['departement_code'];
    echo $donnee['departement_nom'];
}
?>