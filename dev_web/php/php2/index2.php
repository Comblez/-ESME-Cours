<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>PHP1</title>
</head>
<body>
	<h1>PHP 1</h1>
	<?php
	$tab1 = array(
		"prenom" => "Paul",
		"profession" => "medecin",
		"age" => 30
	);
	$tab2 = array(
		"prenom" => "Kevin",
		"profession" => "urologue",
		"age" => 75
	);

	$tab['DURAND'] = $tab1;
	$tab['DUPOND'] = $tab2;

	//print_r($tab);
?>
	<table>
		<thead></thead>
		<tbody>
			 <!--
<?php
			foreach ($tab as $key => $ligne) {
				echo "<tr>\n";
				echo "<td>$key</td>\n";
				foreach ($ligne as $colonne) {
					echo "<td>$colonne</td>\n";
				}
				echo "</tr>\n";
			}
?>
-->


<?php
			foreach ($tab as $key => $ligne) {
?>
				<tr>
					<td>
						<?php> 
							echo $key;
						?>
					</td>
					<?php
						foreach ($ligne as $colonne) {
					?>
					<td>
						<?php> 
						echo $colonne; 
						?>
					</td>
					<?php 
						} 
					?>
					<?php
						}
					?>
				</tr>
		</tbody>
	</table>

</body>
</html>