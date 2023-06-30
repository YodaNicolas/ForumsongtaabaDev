<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Styles specifiques/css/formulaire.css">
    <link rel="stylesheet" href="../styles/Styles commun/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>

    <div class="fondForm">

        <form class="corpform" action="config/conect.php" method="POST">
            <h1 class="ajout">S'INSCRIRE</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="label"> Nom:</label>
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1"
                    placeholder="Entrez le nom" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="label">prénom:</label>
                <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1"
                    placeholder="Entrez le prénom" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="label">Numéro WhatSapp:</label>
                <input type="tel" name="numero" class="form-control" id="exampleFormControlInput1"
                    placeholder="WhatSapp" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="label">Mot de passe:</label>
                <input type="text" name="mot_de_passe" class="form-control" id="exampleFormControlInput1"
                    placeholder="mot de passe" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="label">Confirmer mot de passe:</label>
                <input type="text" name="confirme_mot_de_passe" class="form-control" id="exampleFormControlInput1"
                    placeholder="Confirmer le mot de passe" required>
            </div>
        
        
            <button type="submit" class="btn btn-success">Enregistrer</button>

        </form>
    </div>

    <link rel="stylesheet" href="../style/Styles commun/js/bootstrap.bundle.min.js">
</body>

</html>