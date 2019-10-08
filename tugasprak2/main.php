<!Doctype html>
<html lang="id">
	<head>
		<title>prakt2</title>
		<link rel=stylesheet href="as.css" type="text/css">
	</head>
	<body>
		<div class="header">
			<h1>Registration Form</h1>
		</div>
		<div class="content">
			<fieldset>
				<legend>Person Detail</legend>
				<?php
					$errors = array();
					include 'validate.php'; //memasukkan file validator eksternal
					if (isset($_POST['surname'])) //kondisi awal; pengecekan file pertama dibuka atau tidak
					{
						//pemanggilan fungsi validasi
						validateAlpha($errors, $_POST, 'surname');
						validateKosong($errors, $_POST, 'surname');
						
						validateEmail($errors, $_POST, 'email');
						validateKosong($errors, $_POST, 'email');
						
						validateLenNum($errors, $_POST, 'mobile');
						validateNum($errors, $_POST, 'mobile');
						validateKosong($errors, $_POST, 'mobile');
						
						validateAlnum($errors, $_POST, 'pass');
						validateLenChar($errors, $_POST, 'pass');
						validateKosong($errors, $_POST, 'pass');
						
						validateSame($errors, $_POST, 'pass', 'cpass');
						validateKosong($errors, $_POST, 'cpass');
						
						if ($errors)
						{
							// tampilkan kembali form
							include './form.html';
						}
						else
						{
							// tampilkan pesan sukses
							echo "<blockquote>Form submitted successfully with no error!</blockquote>";
						}
					}
					else
						// tampilkan kembali form
						include 'form.html';
				?>
			</fieldset>
		</div>
	</body>
</html>