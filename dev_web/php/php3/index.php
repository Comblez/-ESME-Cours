<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php3</title>
</head>
<body>
	<h1>PHP3</h1>
	<h2>Les fonctions I</h2>
	<?php
	/*Fonction avec retour*/
		function f1($i){
			return "Le paramètre est $i\n";
		}
		/*Fonction sans retour*/
		function f2($i){
			echo "Le parametre est $i\n";
		}
		/*Fonction sans valeur de retour*/
		function php_p($param){
			echo "<p>\n";
			echo f($param);
			echo "</p>\n";
		}
		/*echo "test f";
		echo f(5);
		echo f("toto");*/
		echo "<br><br>\n";
		echo "Ligne 30 et 31 <br>\n";
		$a = f1("titit");
		$a2 = f2("titi");
		echo "<br><br>\n";
		echo "Ligne 34 et 35 <br>\n";
		echo "test : " . $a;
		echo "test : ". $a2;
		echo "<br><br>\n";
	?>
</body>
</html>