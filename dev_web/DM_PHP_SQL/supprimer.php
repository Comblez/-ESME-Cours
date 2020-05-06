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
	<title>Supprimer</title>
</head>
<body>
	<h1>Suppression</h1>
	<?php  
		if(isset($_GET['id'])){
			$req = "DELETE FROM livre WHERE livre.id = " . $_GET['id'];
			$req_tab_html = mysqli_query($connexion, $req);
			header("location:".  $_SERVER['HTTP_REFERER']); 
			$_POST['message_suppr'];
		}
	?>

</body>
</html>