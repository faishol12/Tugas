<?php
session_start();
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $a = new PDO('mysql:host=localhost;dbname=myapp', 'root', '');
    $query = $a->prepare("SELECT * FROM admins WHERE username='$username' AND password=SHA2($password, 0)");
    $query->execute();
    if ($query->rowCount() > 0) {
        $_SESSION['login'] = true;
        header('Location: ./');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>d</title>
	</head>
	<body>
		<form method="POST">
		<table>
			<tr>
				<td>Username:</td><td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td><td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit"></td><td><input type="reset"></td>
			</tr>
		</table>
		</form>
		<a href="index.php">Halaman utama</a>
	</body>
</html>