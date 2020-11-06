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

// je crée mes varriables
$contry = $_POST('villes');
$inhabitant = $_POST ('habitant');

//j'indique ma base de donnée

$pdo = "INSERT INTO ('Villes','habitant') VALUE ('Villes')";



//je prépare les séléctions de ma table
$pdo = ("SELECT * FROM villes");

//j'éxécute
$pdo-> execute;


//pour chaque villes affiche moi les habitants qui lui corresponde.
foreach ($villes as $Ville){
    echo "yes";
}
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
