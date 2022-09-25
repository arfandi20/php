<?php

		$nilai = 150;
		$lipat = 3;

		for ($i= 1; $i <= $nilai; $i++) { 
			if ( $bagi = $i % $lipat == 0 ) {
			
				echo $i . '<br>';
			}
		}

	
?>