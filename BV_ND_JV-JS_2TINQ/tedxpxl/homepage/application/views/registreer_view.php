<!DOCTYPE html>
<html>
	<head>
		<title>TedPxl</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="" />
		<script></script>
	</head>
	<body>
		<h1>Registreer</h1>
			<form>
			<label for="first_name">Voornaam: </label>
			<input type="text" name="first_name" value="" size="30"/>
			</br>
			<label for="last_name">Achternaam: </label>
			<input type="text" name="last_name" value="" size="40"/>
			</br>
			<label for="email">E-mail: </label>
			<input type="email" name="email" value="" size="60"/>
			</br>
			<label for="country">Land: </label>
			<input type="text" name="country" value="" size="40"/>
			</br>
			<label for="city">Stad: </label>
			<input type="text" name="city" value="" size="40"/>
			</br>
			<label for="phone">Telefoon: </label>
			<input type="text" name="phone" value="" size="10"/>
			</br>
			<label for="pict">Profielphoto: </label>
				<?php echo form_open_multipart('upload/do_upload');?>
			<input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" />
			</form>
			
	</body>
</html>
