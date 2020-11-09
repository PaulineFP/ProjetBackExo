<?php
//Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé

//je me co a ma bdd
// je crée une requette pour indiquer les selections avec restrictions
//j'affiche

//---------------------------------------------------------------------------------------------------------------

//je me connect à ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=cataloguevillesfr;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// je crée une requette pour indiquer les selections avec restrictions
$pdostat = $pdo->query("SELECT * FROM villes_france_free ORDER BY ville_population_2012 DESC LIMIT 10");

//j'affiche

while ($donnee = $pdostat->fetch())
{
    echo $donnee['ville_nom']. 'a ';
    echo $donnee['ville_population_2012']. 'habitants. Elle se situe dans le département ';
    echo $donnee['ville_departement']. ' . ';
}
?>