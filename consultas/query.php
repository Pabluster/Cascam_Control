<html>
	<head>
		<title>Muestra tabla de Ejecutores</title>
	</head>
	<body>
		<div>
			<fieldset>
				<legend>Datos recuperados</legend>
				<div>
					<?php
						include("connect.php");
						$Con = new conexion();
						$Con->recuperarDatos();
					?>
				</div>
			</fieldset>
		</div>

	</body>
	<footer>
	</footer>
</html>