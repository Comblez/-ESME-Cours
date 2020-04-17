<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php3</title>
</head>
<body>
	<h1>PHP3</h1>
	<h2>Les fonctions II</h2>
	<?php
	/*Fnction avec valeur par defaut*/
	function g($chaine1, $chaine2, $esp=" "){
		return $chaine1 . $esp . $chaine2;
	}
	echo "<p>";
	echo g("Bonjour", "Toto");
	echo "</p>\n";

	echo "<p>";
	echo g("Bonjour ", " Toto", " 8===3");
	echo "</p>\n";
	?>
</body>
</html>