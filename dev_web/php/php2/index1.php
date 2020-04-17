<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP1</title>
</head>
<body>
	<h1>PHP 1</h1>
<?php
	//instanciation tableau
	//taille inconnu
	$mon_tableau = array();

	$taille = 10;
	for($i= 0; $i<$taille; $i++) {
		$mon_tableau[] = chr($i + 65);
	}
?>
	<pre>
		<?php print_r($mon_tableau); ?>
	</pre>
<?php
	for ($j=0; $j < $taille ; $j++) { 
		echo "<p>$mon_tableau[$j]</p>\n";
	}
?>
<?php
	$tab3 = array( 	'a'=>42,
					'b' => 'toto',
					'c' => 'titi',
					'bonjour' =>10);
	asort($tab3);
	print_r($tab3);
	$tab4 = explode(" ", "bon jou r");
	$chaine = implode("_", $tab4);
	print_r($tab4);
	print_r($chaine);
?>
</body>
</html>
