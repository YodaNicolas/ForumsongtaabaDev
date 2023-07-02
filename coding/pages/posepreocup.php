<?php
try {
    // $bd = new PDO("mysql:host=localhost; dbname=forum_dclic", "root", "");
    $bd = mysqli_connect("localhost", "root", "", "forum_dclic");
    // $bd->setAttribute(PDO::ATTR_ERRMODE, PDO)
    echo "Connexion à la base de donné établie";
} catch (PDOException $e) {
    die("Erreur :" . $e->getMessage());
}

if (isset($_POST['publi'])) {
    $preocup = $_POST['preocupation'];
    $liencode = $_POST['liencode'];
    $categ = $_POST['categ'];
    $point = $_POST['points'];
    if ($categ == 0) {
    $message = 'Choississez une categorie!';
} else {
    $sql = "INSERT INTO `preocupation` (`id_sujet`, `id_preocupe`, `point preoc`, `message`, `lien_code`) 
    VALUES ('1', '2', '12', 'bonjour', 'lien')";

    mysqli_query($bd, $sql);
    // $message = "Ajout éffectué avec succès.";
    //echo '<script> alert("compte cree avec succes! voulez vous vous connecter maintenant?")</script>';
    // echo '<script> window.location.href = "../Se_connecter.php"</script>';

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pose preocupation</title>
    <link rel="stylesheet" href="../styles/Styles commun/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/Styles specifiques/css/posepreoc.css">

</head>

<body>
    <div container-fluid class="CorpPreoc row justify-content-center">
        <div class="ZoneTXT">
            <form action="posepreocup.php" method="POST">
                <div class="DivchxCat">
                    Choisir une categorie:
                    <select name="categ">
                        <option selected value="0">Selectionner</option>
                        <option value="1">HTML</option>
                        <option value="2">CSS</option>
                        <option value="3">JAVASCRIPT</option>
                        <option value="4">BOOTSTRAP</option>
                    </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Saisissez votre préocupation:</label>
                    <textarea name="preocupation" class="form-control" id="exampleFormControlTextarea1"
                        rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lien menant au code (Facultatif)</label>
                    <input name="liencode" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Collez le lien ici (GitHub de préférence).">
                </div>
                <div class="barEnJeu mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Recompense (Facultatif):</label>
                    <input name="points" type="number" class="form-control ZneEnjeu" id="exampleFormControlInput1"
                        placeholder="points en jeux">
                </div>
                <?php  echo $message  ?>
                <div class="DivBtn">
                    <button class="btnsub" type="submit" name="publi"> Publier </button>
                </div>
            </form>
        </div>


    </div>
    <script src="../styles/Styles commun/js/bootstrap.bundle.min.js"></script>
</body>

</html>