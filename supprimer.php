<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=produit','root','');

$pdoStat = $objetPdo->prepare('DELETE FROM typeproduit WHERE id=:num');





$pdoStat->bindValue(':num', $_GET['numProd'],PDO::PARAM_INT);


$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    
    $message = 'Le produit a été supprimé';
}

    else{
        $message = 'Echec de la suppression du produit';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<h1>Suppressions</h1>
<p><?= $message ?></p>
    
</body>
</html>