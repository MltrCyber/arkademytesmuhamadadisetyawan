<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		Name : <input type="text" name="name" required=""></br>
		Address : <input type="text" name="address" required=""></br>
		Hobbies : <input type="checkbox" name="hobbies[]" value="Fishing">Fishing
		<input type="checkbox" name="hobbies[]" value="Football">Football
		<input type="checkbox" name="hobbies[]" value="Gardening">Gardening</br>
		Is Married ? <input type="radio" name="is_married" value="true">Yes
		<input type="radio" name="is_married" value="false">No</br>
		Highschool : <input type="text" name="highschool">
		University : <input type="text" name="university"></br>
		Skills : <input type="checkbox" name="skills[]" value="PHP">PHP
		<input type="checkbox" name="skills[]" value="Java">Java
		<input type="checkbox" name="skills[]" value="C++">C++</br>
		<button type="submit">Kirim</button>
	</form>
</body>
</html>

<?php 
	if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['hobbies']) && isset($_POST['is_married']) && isset($_POST['highschool']) && isset($_POST['university']) && isset($_POST['skills'])) {

		//create new object
		$object = new stdClass();
		
		//objectstring
		$object->name = $_POST['name'];

		//objectstring
		$object->address = $_POST['address'];

		//objectarray
		$object->hobbies = $_POST['hobbies'];

		//boolean
		$object->is_married = $_POST['is_married'];

		//objectstring
		$object->highSchool = $_POST['highschool'];

		//objectstring
		$object->university = $_POST['university'];

		//objectarray
		$object->skills = $_POST['skills'];

		//convert php object to json
		$json = json_encode($object);

		//print_r json encode
		print_r($json);

	}
	

 ?>
