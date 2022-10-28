<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

<html>
	<head>
		<style>
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

			form {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h2>Resultado de la búsqueda:</h2>
			<?php
				$busqueda = $_GET["search"];

				$query = "select * from tCanciones where nombre='".$busqueda."' or artista='".$busqueda."' or anho='".$busqueda."'";
				$result = mysqli_query($db, $query) or die ('Query error');

				if (mysqli_num_rows($result) > 0) {
					echo "<table border='5' width ='1200'>";
					echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>Nombre</th>";
					echo "<th>Artista</th>";
					echo "<th>Año</th>";
					echo "<th>Foto (Pon el ratón encima)</th>";
					echo "<th>Añadir a favoritos</th>";
					echo "</tr>";

					while($row = mysqli_fetch_array($result)){
						echo "<tr class='rosa'>";
						echo "<td align='center'>".$row["id"]."</td>";
						echo "<td align='center'><a href='detail.php?id=".$row["id"]."'>".$row["nombre"]."</a></td>";
						echo "<td align='center'>".$row["artista"]."</td>";
						echo "<td align='center'>".$row["anho"]."</td>";
						echo "<td align='center'><img src='".$row["url_imagen"]."'/></td>";
						echo "<td>";
						echo "<form method='POST' action='do_add_favorite.php'>";
						echo "<input type='hidden' name='cancion_id' value='".$row["id"]."'>";
						echo "<input type='submit'>";
						echo "</form></td>";
						echo "</tr>";
					}
					echo "</table>";
				} else {
					echo "<p>No coincide con ninguna cancion</p>";
				}

				mysqli_close($db);
			?>
		<br><a href="main.php">Volver</a>
	</body>
</html>
