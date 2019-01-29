<?php 

	/**
	* 
	*/
	class replace
	{
		

		function replace_word($word, $old, $new){

			//dipecah jadi array
			$arrayword = str_split($word, 1);

			//variable baru untuk menampung kata yang tercipta
			$newword = "";

			//perulangan untuk cek apakah setiap huruf = huruf yang akan di gantu
			for ($i=0; $i < count($arrayword); $i++) { 

				//jika huruf sama, menambahkan ke variable newword dengan huruf penggantinya
				if($arrayword[$i] == $old){
					$newword .= $new;
				//jika tidak sama, menambahkan ke variable newword dengan huruf sesuai array
				}else{
					$newword .= $arrayword[$i];
				}
			}

			//return value kata yang tercipta
			return $newword;
		}

	}



 ?>

 <?php 

 $rep = new replace();
 echo $rep->replace_word("kelompok", "o", "a");

  ?>

