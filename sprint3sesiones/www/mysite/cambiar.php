<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');

	$nueva = $_POST['f_nueva'];
	$repetida = $_POST['f_repetido'];

	if($nueva == $repetida) {
	session_start();
	$query = "update tUsuarios set contrasena ='".$nueva."' where id='".$_SESSION['user_id']."'";
	mysqli_query($db,$query) or die('Error');

	echo "<p>Contraseña cambiada con éxito<p>";
	echo "<a href='main.php'>Volver</a>";
	} else {
		echo "<p>Las contraseñas no coinciden</p>";
	}
?>
