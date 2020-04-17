<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP_1</title>
</head>
<body>
	<h1>PHP_1</h1>
		<?php
			//commetaire
			$prenom = "toto";
			echo "<p>PIPI $prenom</p>";
			echo "\n\t\t";
			echo '<p>PIPI $prenom</p>'."\n";
		?>
	<h2>Soustitre</h2>
		<?php
			for($i=1; $i<11; $i++){
			echo "<p>Paragraphe  $i</p>\n\t\t";
			}
			//echo "toto", " titi", " tata";
		?>
	<h2>Variables dynamiques</h2>
		<?php
			$nom1 = 'var';
			$$nom1 = 'toto';
			echo $var ."\n";
		?>
	<h2>Exercice1</h2>
		<?php
			$n = 30;
			echo "Le nombre $n ";
			if($n % 15 ==0){
				echo "multiple de 15";
			}
			else
				echo "n'est pas multiple de 15";
		?>

	<h2>Exercice2</h2>
		<?php
			$a = 12;
			$b = 0;
			$operation = '/';
			$result = 0;

			switch ($operation) {
				case '+':
					$result = $a + $b;
					echo "$a + $b = $result";
					break;
				
				case '-':
					$result = $a - $b;
					echo "$a - $b = $result";
					break;

				case '*':
					$result = $a * $b;
					echo "$a * $b = $result";
					break;

				case '/':
					if($b !=0){
						$result = $a / $b;
						echo "$a / $b = $result";
					}
					else
						echo "T'es con ou quoi?! On ne peut pas diviser par 0. TG SALE HOMO";
					break;
				
				default:
					echo "operation non valide";
					break;

			}
		?>

		<h2>Exercice3</h2>
		<?php
			$a = 4;
			$b = 10;
			$c = $a + $b;
			echo "<p>$a + $b = $c";
			echo "<p>\$a + \$b = $c";
		?>

		<h2>Les tableau</h2>
		<?php
		$tab = ['un','deux',45,95, true];
		echo "<pre> \n"; //espace non ignoré
		print_r($tab);

		$couleur = array('voiture' => 'jaune', 'bonhome' =>'vert', 'kixi' =>'rouge', 7 =>'pipi');
		echo "<table><tbody> \n";
		foreach ($couleur as $key => $value) {
			echo "\t<tr>\n";
			echo "<td>$key</td><td>$value</td> \n";
			echo "\t<tr>\n";
		}
		echo "</tbody></table>\n";

		?>

	</body>
</html>