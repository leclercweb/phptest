<!DOCTYPE>
<html>

		<head>
			
					
		</head>

	<body>



		<?php

		$students = [
		"Emmanuel"  => 42,
		"Thierry"   => 51,
		"Pascal"    => 45,
		"Eric"      => 48,
		"Nicolas"   => 19
			    ];
		?>

	
		<?php
			foreach ($students as $nom => $age) {
				echo '<table><tr><td>' . $nom . '</td>';
				echo '<td>' . $age . '</td></tr></table>';
				}
			$resultat = array_sum($students )/ count($students);
		echo "La moyenne d'âge du groupe est de : <span style='color:red; font-weight: bold;'>". $resultat. ' ans</span>';
		?>
		
	</body>
	
	
</html>		
	
	

	
