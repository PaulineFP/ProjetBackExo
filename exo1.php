<?php
//1) Obtenir la liste des 10 villes les plus peuplées en 2012


// je crée ma bdd
// je me connecte a ma bdd
//j'indique quel selection prendre
// je lui demande quoi afficher
//---------------------------------------------------------------

// je me conecte a ma bdd
$pdo = new PDO('mysql:host=mysql;dbname=ex1;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);



//je lui ou aller (requete)

$pdoStat = $pdo-> query("SELECT * FROM villes ");



//pour chaque villes affiche moi les habitants qui lui corresponde.
while ($donnees = $pdoStat->fetch())
{
    echo $donnees['Villes'];
    echo $donnees['habitants'];
}

$pdoStat->closeCursor();
?>

