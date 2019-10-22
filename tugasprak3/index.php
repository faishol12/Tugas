<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>
			tugasprak3
		</title>
		<link rel=stylesheet href="style.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<h1>Puppies Data</h1>
		</div>
		<div class="content">
			<?php
				$dbc = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
			
				$statement = $dbc->prepare("SELECT animals.puppyname, breeds.breedname, animals.description, animals.price, animals.picture FROM animals inner join breeds on animals.breedid=breed where true");
				$statement->execute();
				$a=$statement->fetchAll();
				
				$colName=array("Puppy Name", "Breed Name", "Description", "Price", "Picture","Action");
				echo("<table> <tr>");
				foreach ($colName as $nama_header){
					echo "<th>$nama_header</th>";
				}
				echo "</tr>";
				
				foreach ($a as $x){ //untuk ngambil baris
					echo "<tr>";
					for ($i=0; $i<5; $i++){ //untuk ngambil index dibuat kolom
						if ($i == 4){
							echo "<td><img src='./img/$x[$i]' alt='Image $x[$i]'></td>";
						}else if ($i == 3){
							echo "<td>$ $x[$i]</td>";
						}
						else{
							echo "<td>$x[$i]</td>";
						}
					}
					echo "<td><a href='add.php'>edit</a></td>";
					echo "</tr>";
				}
				echo "</table>";
			?>
			<form action="add.php" method="POST">
				<input class="button" type="submit" name="tambah" value="Data Baru"/>
			</form>
		</div>
	</body>
</html>