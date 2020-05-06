<?php
	session_start() ;
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbname = "Gestion_Livre_Comblez";
	$connexion = mysqli_connect($server, $user, $password, $dbname);
	if(isset($_POST['message_suppr'])){
		echo "suppresion ok";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ajout du livre</title>
</head>
<body>
	<h1>tableau</h1>
	<?php
	if(isset($_POST['titre']) and isset($_POST['auteur']) and isset($_POST['date'])){
	$T=$_POST['titre'];
	$A=$_POST['auteur'];
	$D=$_POST['date'];
	$req = "INSERT INTO livre(titre, auteur, date_creation)";
	$req .= "VALUES ('$T', '$A', '$D')";
	$resultat = mysqli_query($connexion, $req); // mysql_query(inversion des 2 ??)
	}
	//echo "ajout fait<br><br>";
	$req_tab_html = mysqli_query($connexion, "SELECT * FROM livre");
	?>
	<table>
		<tr>
			<th>id</th>
			<th>Titre</th>
			<th>Auteur</th>
			<th>Date création</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
		<?php
		while($tab_html=mysqli_fetch_array($req_tab_html)){
		?>
		<tr>
			<th> <?php echo $tab_html['id'] ;  ?> </th> 
			<td> <?php echo $tab_html['titre'] ; ?> </td>
			<td> <?php echo $tab_html['auteur'] ; ?> </td>
			<td> <?php echo $tab_html['date_creation'] ; ?> </td>
			<td> <a href='modifier.php?id=<?php echo $tab_html['id'];?>'> Modif </a></td>
			<td> <a href='supprimer.php?id=<?php echo $tab_html['id'];?>'> Suppr </a></td>
		</tr>

	<?php }
	mysqli_close($connexion);
	?>
</table>
</body>
</html>