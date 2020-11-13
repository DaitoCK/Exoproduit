<?php

$connect = new PDO('mysql:host=localhost;dbname=produit','root','');


$pdoStat = $connect->prepare('SELECT * FROM typeproduit');

$executeIsOk = $pdoStat->execute();


//Récupération des resultats //

$produits = $pdoStat->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des produits</h1>

    <ul>
        <?php foreach ($produits as $produit): ?>

            <li>
                    <?= $produit['nom_produit'] ?>
                <p> Référence produit : <?= $produit['ref_produit'] ?> </p>
                Prix : <?= $produit['prix'] ?>

                <a href="supprimer.php?numProd=<?= $produit['id'] ?> ">Supprimer</a>
                <a href="form_modification.php?numProd=<?= $produit['id'] ?> ">Modifier</a><hr>


            </li>
        <?php endforeach; ?>
    </ul>
    </body>
    </html>
               
                
