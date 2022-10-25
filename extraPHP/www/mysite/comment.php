<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

<html>
	<body>
		<?php
			session_start();
			$user_id_a_insertar = 'NULL';
			if(!empty($_SESSION['user_id'])) {
				$user_id_a_insertar = $_SESSION['user_id'];
			}

			$cancion_id = $_POST['cancion_id'];
			$comentario = $_POST['new_comment'];

			$query = "insert into tComentarios (comentario, cancion_id, usuario_id, fecha)
			values ('".$comentario."',".$cancion_id.",".$user_id_a_insertar.",now())";

			mysqli_query($db, $query) or die('Error');

			echo "<p>Nuevo comentario ";
			echo mysqli_insert_id($db);
			echo " añadido </p>";

			echo "<a href='/detail.php?id=".$cancion_id."'>Volver</a>";

			mysqli_close($db);
		?>
	</body>
</html>
