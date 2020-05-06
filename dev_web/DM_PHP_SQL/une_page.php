<?php 
//define info mysql
echo "zone de test:<br>";
session_start() ;
$server = "localhost";
$user = "root";
$password = "";
$dbname = "Gestion_Livre_Comblez";

//creation bdd et table
$bdd = new PDO('mysql:host='.$server, $user, $password);
$request = "CREATE DATABASE IF NOT EXISTS ". $dbname . " DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$bdd->prepare($request)->execute();
echo "BD ok <br>";

$connexion = new PDO("mysql:host=".$server.";dbname=".$dbname, $user, $password);
$request = "CREATE TABLE IF NOT EXISTS ".$dbname.".". "livre"." (
													id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
													titre VARCHAR(20), 
													auteur VARCHAR(20), 
													date_creation DATE)";
$connexion->prepare($request)->execute();
echo "table ok<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
</head>
<body>
	<h1>Ajouter un Livre</h1>
	<form action="ajout_Livre" method="POST">
            <label>Titre <input name="titre" required></label> <br>
            <label>Auteur <input name="auteur" required></label> <br>
            <label>Date Creation<input type="date" name="date" required></label> <br>
            <input type="submit" name="eveline" value="ok">
    </form>
</body>
</html>

