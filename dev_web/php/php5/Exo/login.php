<!-- Edit by Julien Comblez -->

<?php 
session_start();
?>
<pre>
<?php
//compteur commence s'il n'est pas nul et si le tableau log_mdp est declaré il le print
if($_SESSION['compteur'] != 1){
    echo "heho c'est faux là, monsieur";
    echo "\n <br>";
    echo $_SESSION['compteur'];
    echo "\n <br>";
    if(isset($_SESSION['log_mdp'])){
        print_r($_SESSION['log_mdp']);
    }
}
?>
</pre>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <h1>Formulaire</h1>



    <form action="verif_login.php" method="POST">
            <label>login : <input name="login" required></label> <br>
            <label>mdp : <input name="mdp" required></label> <br>
            <!--<input type="submit" name="Valide" value="submit">-->
            <input type="submit" name="eveline" value="ok">
            <?php

            ?>
    </form>

</body>
</html>