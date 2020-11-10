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

// je crée ma requette et je lui indique de réunir les 2 table (SELECT * FROM table1 LEFT JOIN table2 ON table1.id= table2.id)
//https://sql.sh/cours/jointures/left-join ; https://www.youtube.com/watch?v=q_mFXGlNPLU

$pdostat = $pdo->query("SELECT * FROM villes_france_free LEFT JOIN departement ON departement_code = ville_departement ORDER BY departement_code ");


$pdostat -> execute();


// préparer le calcule pour chaque département le nombre de ligne ou il apparait
$result = $pdo->prepare("SELECT COUNT(ville_departement) FROM villes_france_free GROUP BY ville_departement");

$result -> execute();


?>

<!-- Boucle pour les communes -->

<?php while ($donnee = $result->fetch()): ?>

<p>Nom du département : <?= $donnee['departement_nom'] ?></p>
<p>Code du département : <?= $donnee['departement_code'] ?> </p>
<p>Nombre de commune : <?= $donnee['ville_commune'] ?> </p>

<?php endwhile; ?>