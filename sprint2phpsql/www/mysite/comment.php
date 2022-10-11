<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

<html>
	<body>
		<?php
			$cancion_id = $_POST['cancion_id'];
			$comentario = $_POST['new_comment'];

			$query = "insert into tComentarios (comentario, cancion_id, usuario_id)
			values ('".$comentario."',".$cancion_id.",NULL)";

			mysqli_query($db, $query) or die('Error');

			echo "<p>Nuevo comentario ";
			echo mysqli_insert_id($db);
			echo " añadido </p>";

			echo "<a href='/detail.php?id=".$cancion_id."'>Volver</a>";

			mysqli_close($db);
		?>
	</body>
</html>
