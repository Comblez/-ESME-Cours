<?php
session_start();
$a = session_id();
$_SESSION["nom"]= "toto";
$_SESSION["age"]= "42";
$_SESSION["prenom"] = "Vita";
$_SESSION["prix"]= "19.25";
$_SESSION["tableau"]= array("a" => -4);

unset($_SESSION);
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index_Exercice_Cours</title>
</head>
<body>
	<h1>Index</h1>
	<p>Le numero de session est <?= $a; ?></p>
	<pre>
		<?php if(isset($_SESSION)){
			print_r($_SESSION);
			}
		?>
	</pre>

</body>
</html>