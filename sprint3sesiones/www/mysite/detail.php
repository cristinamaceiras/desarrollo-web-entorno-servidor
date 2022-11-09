<?php
	$db = mysqli_connect('172.16.0.2', 'root', '1234', 'mysitedb') or die('Fail');
?>

<html>
	<body>
		<a href="/logout.php">Logout</a>
		<a href="main.php">Volver</a>
		<hr>

		<?php
			if(!isset($_GET['id'])) {
				die('No se ha especificado una canción');
			}

			$cancion_id = $_GET['id'];
			$query = 'select * from tCanciones where id='.$cancion_id;
			$result = mysqli_query($db, $query) or die('Query error');
			$only_row = mysqli_fetch_array($result);


			echo '<h1>'.$only_row['nombre'].' ID:'.$only_row['id'].'</h1>';
			echo '<h3>'.$only_row['artista'].', '.$only_row['anho'].'</h3>';
			echo '<img src="'.$only_row['url_imagen'];
			echo '"width="200" height="200">';
		?>

		<h3>Comentarios:</h3>

		<ul>
			<?php
				$query2 = 'select c.*, u.nombre from tComentarios c join tUsuarios u on c.usuario_id = u.id where cancion_id='.$cancion_id;
				$result2 = mysqli_query($db, $query2) or die('Query 2 error');

				while ($row = mysqli_fetch_array($result2)) {
					echo '<li>'.$row['comentario'].'. Usuario: '.$row['nombre'].'. Fecha: '.$row['fecha'].'</li>';
				}

				mysqli_close($db);
			?>
		</ul>

		<p>Deja un nuevo comentario:</p>

		<form action="/comment.php" method="post">
			<textarea rows="4" cols="50" name="new_comment"></textarea><br>
			<input type="hidden" name="cancion_id" value="
			<?php echo $cancion_id; ?>">
			<input type="submit" value="Comentar">
		</form>

	</body>
</html>
