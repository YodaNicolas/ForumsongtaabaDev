<?php
try {
    // $bd = new PDO("mysql:host=localhost; dbname=forum_dclic", "root", "");
    $bd = mysqli_connect("localhost", "root", "", "forum_dclic");
    // $bd->setAttribute(PDO::ATTR_ERRMODE, PDO)
    echo "Connexion à la base de donné établie";
} catch (PDOException $e) {
    die("Erreur :" . $e->getMessage());
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$mot_de_passe = $_POST['mot_de_passe'];
$confirme_mot_de_passe = $_POST['confirme_mot_de_passe'];
if ($confirme_mot_de_passe != $mot_de_passe) {
    $message = 'mot de passe different';
} else {
    $verif = "SELECT apprenant.nom FROM `apprenant` WHERE apprenant.numero_tel = $numero";
    $select = mysqli_query($bd, $verif);
    $row = mysqli_fetch_array($select);
    if (is_array($row)) {
        $message = 'ce numero existe';
    }else{
        $sql = "INSERT INTO apprenant (nom, prenom, numero_tel, mot_de_passe) 
VALUES ('$nom', '$prenom', '$numero', '$mot_de_passe')";
        mysqli_query($bd, $sql);
        // $message = "Ajout éffectué avec succès.";
        echo '<script> alert("compte cree avec succes! voulez vous vous connecter maintenant?")</script>';
        echo '<script> window.location.href="../Se_connecter.php"</script>';
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/smsInfo.css">
    <title>Document</title>
</head>

<body>
    <div class="DivInfo">
        <h1 class="PageInfo">
            <?php echo $message; ?>
        </h1>
        <a href="liste.php"><button class="boutonListe ">VOIR LA LISTE</button></a>
    </div>



</body>

</html>