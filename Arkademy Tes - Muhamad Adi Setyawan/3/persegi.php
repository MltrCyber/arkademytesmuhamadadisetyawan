<?php 

	/**
	* 
	*/
	class persegi_
	{
		

		function create_persegi($panjang){

			for ($i=0; $i < $panjang; $i++) {
				if ($i == 0 || $i == $panjang-1 || $i == (($panjang-1)/2)) {
				 	for ($a=0; $a < $panjang; $a++) { 
						echo "&nbsp;*&nbsp;";
					}
				}else{
					for ($z=0; $z < $panjang; $z++) { 
						if ($z == 0 || $z == $panjang-1 || $z == (($panjang-1)/2)) {
							echo "&nbsp;*&nbsp;";
						}else{
							echo "&nbsp;&nbsp;&nbsp;&nbsp;";
						}
					}
				} 
				echo "</br>";
			}
		}

	}



 ?>

 <?php 

 $per = new persegi_();
 echo $per->create_persegi(7);

  ?>

