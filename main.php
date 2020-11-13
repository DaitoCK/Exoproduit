<?php

/*ouverture de la connexion à la base de données */

$objetPdo = new PDO('mysql:host=localhost;dbname=produit','root','');

/*Requette d'insertion (sql)*/


$pdoStat = $objetPdo->prepare('INSERT INTO typeproduit VALUES (NULL, :nom_produit, :ref_produit, :prix)');

//*on lie chaque marqeur à une valeur */

$pdoStat->bindValue(':nom_produit', $_POST['name'], PDO::PARAM_STR);

$pdoStat->bindValue(':ref_produit', $_POST['ref'], PDO::PARAM_STR);

$pdoStat->bindValue(':prix', $_POST['prix'], PDO::PARAM_STR);


//*éxécution de la requete préparée */ 

$insertIsOk = $pdoStat->execute();


if($insertIsOk){
    
    $message = 'Le produit a été ajouté dans la bdd';
}

    else{
        $message = 'Echech de l\'insertion';
    }
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Insertion des produits</h1>
<p><?php echo $message; ?></p>
<a href="index.php">Retour à l'acceuil</a>



</body>
</html>



