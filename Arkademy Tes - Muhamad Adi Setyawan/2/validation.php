<?php 

	/**
	* 
	*/
	class validation
	{
		

		function is_username_valid($username){
			if(strlen($username) != '8'){
				return "username harus 8 digit";
			}else if(!preg_match('#[a-z]+#', $username)){
				return "username tidak ada huruf kecil";
			}else if(!preg_match('#[_]+#', $username)){
				return "username tidak ada underscore(_)";
			}else if(preg_match('#[A-Z]+#', $username)){
				return "username tidak boleh ada huruf besar";
			}else if(preg_match('#[\W]+#', $username)){
				return "username tidak ada karakter spesial selain underscore(_)";
			}else if(preg_match('#[1-9]+#', $username)){
				return "username tidak boleh ada angka";
			}else{
				return "username valid";			
			}

		}

		function is_password_valid($password){
			if(strlen($password) != '8'){
				return "password harus 8 digit";
			}else if(!preg_match("#[0-9]+#",$password)){
				return "password tidak ada angka";
			}else if(!preg_match("#[A-Z]+#",$password)){
				return "password tidak ada huruf besar";
			}else if(!preg_match("#[a-z]+#",$password)){
				return "password tidak ada huruf kecil";
			}else if(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/",$password)){
				return "password tidak ada karakter spesial";
			}else{
				return "password valid";
			}
		}

	}



 ?>

 <?php 

 $val = new validation();
 echo $val->is_username_valid("bigboss_");
 echo "</br>";
 echo $val->is_password_valid("qaZZ_123");

  ?>

