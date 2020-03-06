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
        <h2>Saisie article</h2>
        <form action="Controllers/SaisieArticleController.php" method="post">
            <div class="form-group">
                <label for="nomFichier">nomFichier:</label>
                <input type="text" class="form-control" id="nomFichier" name="nomFichier" placeholder="Entrer Chemin relatif du fichier">
            </div>
            <div class="form-group">
                <label for="titre">titre:</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter titre">
            </div>
            <div class="form-group">
                <label for="type">type:</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
            </div>
            <div class="form-group">
                <label for="prix">prix:</label>
                <input type="text" class="form-control" id="prix" name="prix" placeholder="Enter prix">
            </div>
            <div class="form-group">
                <label for="courteDescription">courteDescription:</label>
                <input type="text" class="form-control" id="courteDescription" name="courteDescription" placeholder="Enter courteDescription">
            </div>
            <div class="form-group">
                <label for="longueDescription">longueDescription:</label>
                <input type="text" class="form-control" id="longueDescription" name="longueDescription" placeholder="Enter longueDescription">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>