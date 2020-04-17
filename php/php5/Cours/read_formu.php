<!DOCTYPE html>
<html>
<head>
	<title>PHP Formulaire lecture</title>
</head>
<body>
	<h1>Lecture</h1>
	<p>Taille de la variable $_get : <?= sizeof($_GET)?>
	<p>Taille de la variable $_post : <?= sizeof($_POST)?>
	<p>Votre nom est : 
	<?php
		if (isset($_POST["nom"])) {
			echo $_POST["nom"];
		}
		else{
			echo "Inconnu";
		}
	?>
	</p>
	<pre>
		<?php
		print_r($_POST);
		?>
	</pre>
</body>
</html>