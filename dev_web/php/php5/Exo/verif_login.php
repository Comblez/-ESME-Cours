<!-- Edit by Julien Comblez -->

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
    echo "\n\n <br> <br>";

    //remplissage du tableau par une chaine de char 
    $n=0;
    while(isset($_SESSION['log_mdp'][$n])){
        $n++;
    }
    $_SESSION['log_mdp'][$n] = $_POST['login']." ".$_POST['mdp'];

        if (($_POST['login']=="userA") and ($_POST['mdp']=="alibaba123")){
                echo "gg wp";
                //remise a 0 de n || du compteur a 1 || DESTRUCTION du tableau log_mdp
                $n=0;
                $_SESSION['compteur'] = 1;
                unset($_SESSION['log_mdp']);

            }
        else{
            // retour arrière de votre navigateur
            header("location:" . $_SERVER['HTTP_REFERER']); 
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
        //print_r($_POST['eveline']);
        ?>
    </pre>
</body>
</html>