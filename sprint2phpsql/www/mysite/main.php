<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<body>
		<h1>Conexión establecida</h1>
		<?php
			$query = 'SELECT * FROM tCanciones';
			$result = mysqli_query($db, $query) or die('Query error');

			echo '<table border="5">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Artista</th>';
			echo '<th>Año</th>';
			echo '<th>Foto</th>';
			echo '</tr>';

			while ($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['nombre'];
				echo '</a>';
				echo ' ';
				echo $row['artista'];
				echo ' ';
				echo $row['anho'];
				echo '<br><br>';
				echo '<img src="';
				echo $row['url_imagen'];
				echo '" width ="300" height="300"/>';
				echo '<br><br>';
			}

			echo '</table>';

			mysqli_close($db);
		?>
	</body>
</html>
