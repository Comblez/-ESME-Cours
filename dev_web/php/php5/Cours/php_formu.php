<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire php</title>
</head>
<body>
	<h1>forms >> ($_GET, $_POST)</h1>

	<form action="read_formu.php" method="POST">
			<label>prenom : <input name="prenom"></label> <br>
			<label>nom : <input name="nom"></label> <br>
			<p>Motif de sortie</p>
			<input type="checkbox" name="choix[]"> Faire caca des brindilles <br>
			<input type="checkbox" name="choix[]"> Promener sa femme <br>
			<input type="checkbox" name="choix[toto]" value="ok"> Brosser son ponney <br>
			<input type="checkbox" name="choix[]"> Fumer joint <br>
			<input type="checkbox" name="choix[]"> Uriner <br>

			<label type="hidden" name="caché" value="dimension"></label>
			<input type="submit" name="Valide">
	</form>

		<p>Variable $_POST</p>
		<pre>
		<?php 
		//print_r($_POST);
		 ?>
		</pre>
	
		<p>Variable $_GET</p>
		<pre>
		<?php 
		//print_r($_GET);
		 ?>
		</pre>

</body>
</html>