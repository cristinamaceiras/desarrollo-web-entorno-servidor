<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			/*
			img {
				width: 100px;
				height: 100px;
				transition: width 2s, height 2s;
			}

			img:hover {
				width: 300px;
				height: 300px;
			}

			.rosa:hover {
				background-color: pink;
			}
			*/

			.favoritas {
				text-align: center;
			}


			.favoritas a {
				font-size: 25px;
				color: hotpink;
			}
		</style>
	</head>
	<body>
		<?php
			session_start();
			if (isset($_SESSION['user_id'])) {
				echo "<p>Estas logueado</p>";
				echo "<a href='/logout.php'>Logout</a> ";
				echo "<a href='/cambiar.html'>Cambiar contraseña</a>";
				echo "<hr><br>";
			} else {
				echo "<a href='/login.html'>Login</a>";
				echo "<hr><br>";
			}
		?>

		<form action ="search.php" method="get" align="center">
			<input type="text" name="search" placeholder="Texto de búsqueda">
			<input type="submit">
		</form>

		<hr><br>

		<div class="favoritas">
			<a href="favorites.php">Tus canciones favoritas</a>
		</div>

		<br><hr>

		<?php
			/*$query = 'SELECT * FROM tCanciones';
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
				echo '<tr class="rosa">';
				echo '<td align="center">'.$row['id'].'</td>';
				echo '<td align="center">';
				echo '<a href="/detail.php?id='.$row['id'];
				echo '">'.$row['nombre'];
				echo '</a></td>';
				echo '<td align="center">'.$row['artista'].'</td>';
				echo '<td align="center">'.$row['anho'].'</td>';
				echo '<td align="center"><img src="'.$row['url_imagen'];
				echo '"/></td>';
				echo '</tr>';
			}

			echo '</table>';*/

			mysqli_close($db);
		?>
	</body>
</html>
