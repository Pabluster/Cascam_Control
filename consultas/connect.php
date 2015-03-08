<?php
	class conexion{
		function recuperarDatos(){
		
		$host = "localhost";
		$user = "root";
		$pasw = "asdasd";
		$db = "DB_Cascam_Control";

		$con = mysql_connect($host, $user, $pasw) or die("No se pudo autenticar con la DB.");
		mysql_select_db($db, $con) or die("No se encontro la Base de Dato o esta no existe");
		$query = "SELECT * FROM TBL_Ejecutor";
		$resultado = mysql_query($query);

		while ($fila = mysql_fetch_array($resultado)) {
			echo "<table border=1 align=center frame=border rules=all>";
			echo "<tr>
					<td> $fila[Nom_Ejecutor] </td>
					<td> $fila[RUT] </td>
					<td> $fila[Cargo] </td>
				</tr>";
			echo "</table>";
			}
		}
	}
?>