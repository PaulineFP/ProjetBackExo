<?php
/*Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces département,
en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes*/

//je me connecte a ma bdd
//faire une jointure de table pour cummuler les donées
//je crée une requete pour indicquer l action pour les selection
// calculer le nombre de comunes dans chaque département
// je tris
//j'affiche
//---------------------------------------------------------------------------


//je me connect à ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=cataloguevillesfr;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/* je crée ma requette et je lui indique de :

- calculler le nombre de ligne avec le meme departement
-réunir les 2 table (SELECT * FROM table1 LEFT JOIN table2 ON table1.id= table2.id)
- regrouper par département
- par ordre de numéro de département

*/
$pdostat = $pdo->query("SELECT departement_nom, ville_departement, COUNT(*) AS nbr_items FROM villes_france_free LEFT JOIN departement ON departement_code = ville_departement GROUP BY ville_departement ORDER BY nbr_items DESC");


?>

<?php

while ($donnee = $pdostat->fetch())

{
    echo '<p> Le '. $donnee['ville_departement'] .' du département '. $donnee['departement_nom'].' a '.$donnee ['nbr_items'].' communes.</p>';
}

$pdostat->closeCursor();
?>