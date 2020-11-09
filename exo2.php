<?php
//2) Obtenir la liste des 50 villes ayant la plus faible superficie

//je me connect a ma BDD
// je crée une requette pour lui indiquer ou il doit faire l acction
// j'affiche le resultat en présisant bien les tables, la quantité et les ranger par ordre

//--------------------------------------------------------------------------------------------------------

//je me connect à ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=cataloguevillesfr;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// je crée une requette

$pdostat = $pdo->query("SELECT * FROM villes_france_free" );

//j'affiche

while ($donnee = $pdostat->fetch())
{
   echo $donnee['ville_nom'];
   echo $donnee['ville_surface'];
}




?>