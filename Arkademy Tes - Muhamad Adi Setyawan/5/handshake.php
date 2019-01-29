<?php 

	/**
	* 
	*/
	class handshake
	{
		

		function count_handshake($summaryofperson){

			//deklarasi jumlah jabat tangan
			$summaryofhandshake = 0;

			//perulangan untuk setiap orang (perorangan)
			for ($numberofperson=1; $numberofperson < $person; $numberofperson++) { 

				//perulangan untuk jabat tangan setiap orang dengan orang yang nomer nya di atas orang yang berjabat tangan, jadi tidak terjadi 2x jabat tangan untuk orang yang sama
				for ($i=1; $i <= $summaryofperson ; $i++) { 

					if($numberofperson < $i){
						$summaryofhandshake = $summaryofhandshake + 1;
					}

				}

			}

			//return jumlah jabat tangan
			return $summaryofhandshake;
		}

	}



 ?>

 <?php 

 $hs = new handshake();
 echo $hs->count_handshake(6);

  ?>

