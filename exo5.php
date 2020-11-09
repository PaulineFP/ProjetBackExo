<?php
/*Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces département,
en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes*/

//je me connecte a ma bdd
//je crée une requete pour indicquer l action pour les selection
// je tris
//j'affiche
//---------------------------------------------------------------------------


//je me connect à ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=cataloguedépartementfr;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// je crée ma requette

$pdostat = $pdo->query("SELECT * FROM  departement ORDER BY  DESC ");

//j'affiche
while ($donne = $pdostat ->fetch())
{
    echo $donne['departement_code'];
    echo $donne['deparetement_nom'];
}
?>