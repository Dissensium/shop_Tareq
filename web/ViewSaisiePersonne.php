<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Saisie Personne</h2>
        <form action="Controllers/saisiePersonneController.php" method="post">
            <div class="form-group">
                <label for="Nom">Nom de Famille:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer un nom de Famille">
            </div>
            <div class="form-group">
                <label for="prénom">prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer un prénom">
            </div>
            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" class="form-control" id="pays" name="pays" placeholder="Entrer vôtre pays">
            </div>
            <div class="form-group">
                <label for="codepostal">Code Postal</label>
                <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Entrer vôtre code Postal">
            </div>
            <div class="form-group">
                <label for="adressedelivraison">adresse de livraison:</label>
                <input type="text" class="form-control" id="adressedelivraison" name="adressedelivraison" placeholder="Entrer vôtre adresse de livraison">
            </div>
            <div class="form-group">
                <label for="adressedefacturation">Adresse de facturation</label>
                <input type="text" class="form-control" id="adressedefacturation" name="adressedefacturation" placeholder="Entrer vôtre adresse de facturation">
            </div>
            <div class="form-group">
                <label for="numtel">Numéro de téléphone:</label>
                <input type="text" class="form-control" id="numtel" name="numtel" placeholder="Entrer un numéro de téléphone">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
