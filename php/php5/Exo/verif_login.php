<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>verif_login</title>
</head>
<body>
    <h1>Réponse</h1>
    <!--<p>Taille de la variable $_get : <?= sizeof($_GET)?>
    <p>Taille de la variable $_post : <?= sizeof($_POST)?>-->
    <p>!! Connexion !! : <br><br>
    <?php
        if (($_POST['login']=="userA") and ($_POST['mdp']=="alibaba123")){
                echo "gg wp";
                $_SESSION['compteur'] = 1;

            }
        else{
            echo "fdp";
            header("location:".  $_SERVER['HTTP_REFERER']); 
            $_SESSION['compteur']++;
        }
    ?>
    </p>
    <form action="login.php" method="POST">
            <input type="submit" name="kevin" value="retour">
            <?php

            ?>
    </form>
    <pre>
        <?php
        print_r($_POST['eveline']);
        ?>
    </pre>
</body>
</html>