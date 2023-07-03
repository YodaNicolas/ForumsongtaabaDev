<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../styles/Styles specifiques/css/se connecter.css">
    
    <link rel="stylesheet" href="Style/bootstrap.min.css">
</head>

<body>
           
           
        <div class="login-box">

            <h2>SE CONNECTER</h2>
            <form action="Se_connecter.php" method="POST">
                <div cl>
                    <div class="user-box">
                        <input type="text" name="numero" required="">
                        <label>Numero</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="mot_de_passe" required="">
                        <label>Mot de passe</label>
                    </div>
                </div>
                <button class="Cnecter" type="submit" name="login">connection</button>
                <a href="#">Mot de passe oublié?</a>
            </form>

       
       
    </div>
    <?php
    $con = mysqli_connect("localhost", "root", "", "forum_dclic");

    if (isset($_POST['login'])) {
        $numero = $_POST['numero'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $query = "SELECT * FROM `apprenant` WHERE `numero_tel`='$numero' AND `mot_de_passe`='$mot_de_passe'";
        $select = mysqli_query($con, $query);
        $row = mysqli_fetch_array($select);
        if (is_array($row)) {
          
            $_SESSION["numero"] = $row["numero_tel"];
            $_SESSION["mot_de_passe"] = $row["mot_de_passe"];
        } else {
           
            echo '<script> alert("Mot de passe et/ou email invalide")</script>';
            echo '<script> window.location.href="Se_connecter.php"</script>';
        }
    }
    if (isset($_SESSION["numero"])) {
        header("location:liste_preocupation.php");
        echo 'connecté avec succes';
    }
    ;

    ?>




</body>

</html>