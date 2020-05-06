<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "Gestion_Livre_Comblez";
	$connexion = mysqli_connect($server, $user, $password, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier</title>
</head>
<body>
	<h1>Modification</h1>
	<form method="POST">
        <label>Titre <input name="titre_modif" required></label> <br>
        <label>Auteur <input name="auteur_modif" required></label> <br>
        <label>Date Creation<input type="date" name="date_modif" required></label> <br>
        <label><input type="checkbox" id="verif" name="verif" required>Je suis sur(e) de ma mofication</label><br>
        <input type="submit" name="eveline" value="Valider">   
    </form>
    <form method="POST">
    	<input type="submit" name="kevin" value="Retour">
    </form>
	<?php
	$req_tab_html = mysqli_query($connexion, "SELECT * FROM livre WHERE id = ".$_GET['id']); 
	while($tab_html=mysqli_fetch_array($req_tab_html)){
		echo "<br><br>";
		echo "### Anciennes Informations ###";
		echo "<br>";
		echo "id : ";
		print_r($tab_html['id']);
		echo "<br>";
		echo "Titre : ";
		print_r($tab_html['titre']);
		echo "<br>";
		echo "Auteur : ";
		print_r($tab_html['auteur']);
		echo "<br>";
		echo "Date de Création : ";
		print_r($tab_html['date_creation']);
	}


	if(isset($_POST['eveline']) and ($_POST['eveline']=="Valider")){
		if(isset($_POST['titre_modif']) and isset($_POST['auteur_modif']) and isset($_POST['date_modif'])){
			$Tm=$_POST['titre_modif'];
			$Am=$_POST['auteur_modif'];
			$Dm=$_POST['date_modif'];
			$req ="UPDATE livre SET titre = '".$Tm."' ,auteur = '".$Am."' ,date_creation = '".$Dm."' WHERE livre.id = ".$_GET['id'];
			$resultat = mysqli_query($connexion, $req) or die(mysqli_error($connexion)); 
			echo "<br><br> ajout fait <br><br>";
			header('location: ajout_livre.php');
		}
	}
	else{
		echo "<br>";
		echo "pas de if";
	}
	?>
</body>
</html>