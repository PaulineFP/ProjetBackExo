<?php
//1) Obtenir la liste des 10 villes les plus peuplées en 2012


// je crée ma bdd
// je me connecte a ma bdd
//je crée une variable
// je prépare les selections de ma table
//j'éxecute
// j'affiche
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
