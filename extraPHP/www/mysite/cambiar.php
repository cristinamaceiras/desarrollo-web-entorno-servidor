<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');

	$vieja = $_POST['f_vieja'];
	$nueva = $_POST['f_nueva'];
	$repetida = $_POST['f_repetido'];

	session_start();

	if($vieja == $_SESSION['user_contra']) {
		if($nueva == $repetida) {
			$query = "update tUsuarios set contrasena ='".$nueva."' where id='".$_SESSION['user_id']."'";
			mysqli_query($db,$query) or die('Error');

			echo "<p>Contraseña cambiada con éxito<p>";
			echo "<a href='main.php'>Volver</a>";
		} else {
			echo "<p>Las contraseñas no coinciden</p>";
		}
	} else {
		echo "<p>La contraseña actual es incorrecta</p>";
	}

	mysqli_close($db);
?>
