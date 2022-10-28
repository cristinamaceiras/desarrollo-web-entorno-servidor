<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');

	session_start();
	$id_usuario = $_SESSION['user_id'];
	$id_cancion = $_POST['cancion_id'];

	$query = "insert into tFavoritos(idUsuario, idCancion) values (".$id_usuario.", ".$id_cancion.")";
	$result = mysqli_query($db, $query) or die("Query error");

	mysqli_close($db);
?>

<html>
	<body>
		<p>Favorito añadido</p>
		<a href="main.php">Volver</a>
	</body>
</html>
