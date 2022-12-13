<?php
	$db = mysqli_connect('172.16.0.1', 'root', '1234', 'repaso') or die('Fail');

	$correo = $_POST['f_email'];
	$contra = $_POST['f_pass'];

	$query = "select email, contrasena from Usuarios where email = '".$correo"'";
	$result = mysqli_query($db, $query) or die('Query error');




?>
