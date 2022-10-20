<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img:hover {
				width: 300px;
				height: 300px;
				transition: width 3s, height 3s;
			}
		</style>
	</head>
	<body>
		<h1>Conexión establecida</h1>

		<a href="/logout.php">Logout</a><br><br>

		<?php
			$query = 'SELECT * FROM tCanciones';
			$result = mysqli_query($db, $query) or die('Query error');

			echo '<table border="5" width="1200">';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Artista</th>';
			echo '<th>Año</th>';
			echo '<th>Foto (Pon el ratón encima)</th>';
			echo '</tr>';

			while ($row = mysqli_fetch_array($result)) {
				echo '<tr>';
				echo '<td align="center">'.$row['id'].'</td>';
				echo '<td align="center">';
				echo '<a href="/detail.php?id='.$row['id'];
				echo '">'.$row['nombre'];
				echo '</a></td>';
				echo '<td align="center">'.$row['artista'].'</td>';
				echo '<td align="center">'.$row['anho'].'</td>';
				echo '<td align="center"><img src="'.$row['url_imagen'];
				echo '" width="100" height="100"/></td>';
				echo '</tr>';
			}

			echo '</table>';

			mysqli_close($db);
		?>
	</body>
</html>
