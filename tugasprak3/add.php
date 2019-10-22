<!Doctype html>
<html lang="en">	
	<head>
		<title>Tambah baru</title>
		<link rel=stylesheet href="style.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<h1>Animals Details</h1>
		</div>
		<div class="content">
			<?php
				if (isset($_POST["insert"])){
					$dbc = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
						
					$statement = $dbc->query("INSERT INTO animals VALUES (null, '{$_POST['puppyname']}', '{$_POST['breedid']}', '{$_POST['description']}', '{$_POST['price']}', '{$_POST['picture']}')");
					echo "<div style='text-align:center;'>Data sudah ditambahkan<br/>";
					
					echo'<a href="index.php">kembali</a> </div>';
				}else{
			?>
			<fieldset>
				<form action="add.php" method="POST">
					<div class="field">
						<label for="puppyname">Puppy Name</label><br/>
						<input type="text" id="puppyname" name="puppyname"/>
					</div>
					<div class="field">
						<label for="breedid">Breed ID</label><br/>
						<select name="breedid" id="breedid">
							<?php
								$dbc = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
						
								$statement = $dbc->prepare("SELECT * FROM breeds where true");
								$statement->execute();
								foreach ($statement as $row){
									echo "<option value=".$row['breed'].">".$row['breedname']."</option>";
								}
							?>
						</select>
					</div>
					<div class="field">
						<label for="description">Description</label><br/>
						<input type="text" id="description" name="description"/>
					</div>
					<div class="field">
						<label for="price">Price</label><br/>
						<input type="text" id="price" name="price"/>
					</div>
					<div class="field">
						<label for="picture">Picture</label><br/>
						<input type="file" id="picture" name="picture"/>
					</div>
					<div>
						<input type="submit" name="insert" value="Update"/>
						<input type="submit" name="reset" value="reset"/>
					</div>
				</form>
			</fieldset>	
			<?php
			}
			?>
		</div>
	</body>
</html>