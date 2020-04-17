<?php 
session_start();
?>
<?php echo $_SESSION['compteur'];?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
</head>
<body>
    <h1>Formulaire</h1>



    <form action="verif_login.php" method="POST">
            <label>login : <input name="login"></label> <br>
            <label>mdp : <input name="mdp"></label> <br>
            <!--<input type="submit" name="Valide" value="submit">-->
            <input type="submit" name="eveline" value="ok">
            <?php

            ?>
    </form>

</body>
</html>