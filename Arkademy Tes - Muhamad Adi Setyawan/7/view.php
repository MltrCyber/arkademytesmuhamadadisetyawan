<?php

	 $db = mysqli_connect('localhost','root','','arkademy')
	 or die('Error connecting to MySQL server.');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Arkademy</title>
	<style>
	#table {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#table td, #table th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#table tr:nth-child(even){background-color: #f2f2f2;}

	#table tr:hover {background-color: #ddd;}

	#table th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
</head>
<body>
	<table id="table" border="1" width="100%">
		<thead>
		<th width="">Person Id</th>
		<th>Name</th>
		<th>Hobbies</th>
		</thead>
		<tbody>
			<?php

				$query = "	SELECT 
								a.person_id, 
								b.name, 
								(SELECT GROUP_CONCAT(c.name SEPARATOR ', ') FROM hobbies c WHERE c.person_id = a.person_id) as person_hobbies 
							FROM 
								hobbies a 
							JOIN 
								categories b 
							ON 
								a.person_id = b.id 
							GROUP BY 
								a.person_id";
				
				$result = mysqli_query($db, $query);

				while ($res = mysqli_fetch_object($result)) {
			?>

					<tr>
						<td><?= $res->person_id ?></td>
						<td><?= $res->name ?></td>
						<td><?= $res->person_hobbies ?></td>
					</tr>

			<?php 
				} 
			?>
		</tbody>
	</table>

</body>
</html>