    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ListingProduit</title>
    </head>
    <body>

    <h1>Ajouter un produit</h1>

        <form action="main.php" method="post">
                <p>
                    <label for="nom">Nom du produit</label>
                    <input id="nom_produit" type="text" name="name">
                </p>
                <p>
                    <label for="ref">Référence produit</label>
                    <input type="text" id="ref_produit" name="ref">
                </p>
                <p>
                    <label for="prix">Prix</label>
                    <input type="text" id="prix" name="prix">
                </p>
                <p><input type="submit" value="Enregistrer"></p>
            <a href="liste.php"><h1>Liste des produits disponibles</h1></a>
        </form>

    </body>
    </html>