<?php
/**
* 
*                   Sistema para control y gestion de componentes
*                                   Cas-Cam/LV
*           Desarrollado para Compañia Minera Doña Ines de Collahuasi SCM 
*
*
* * * * * * * * * * * * * * * *
* Datos de desarrollo
* *
* Nombre de Archivo 
* Version 0.0.1 
* Fecha Creacion 20150307
* Hora Creacion 05:48:02
* * 
* Modificaciones
* *
* Version 0.0.0
* Fecha Modificacion
* Hora ultima modificacion
* *
* Datos del desarrollador
* *
* Nombre Pablo Figueroa Alvarez
* Mail pabluster@gmail.com
* Movil (+56-9) 4234 3378
* * * * * * * * * * * * * * * *
* Descripcion del Archivo
*
* Este documento tiene por objeto almacenar y contener
* datos necesarios para generar la insercion de informacion
* de forma directa en la DB por medio de datos ingresados en
* en un formulario web.
* * * * * * * * * * * * * * * *
*
* la modificacion de este o parte de este puede ocacionar falla en la aplicacion
* este y todos los componentes de este sistema estan protegidos por derechos de
* porpiedad intelectual bajo la ley de derecho de autor que se encuentra regulada 
* por la Ley Chilena N° 17.336 sobre Propiedad Intelectual de 2/10/1970 y sus 
* posteriores modificaciones.
*
*   Todos los derechos reservados 
* ©Pablo Figueroa Alvarez Marzo 2015
*/

	/**
	* Establecemos conexion con la DB
	* llamando al archivo connect.php
	*/
	
	$host ="localhost";
	$user ="root";
	$pass ="asdasd";
	$db   ="DB_Cascam_Control";

	$connect = mysqli_connect($host,$user,$pass,$db);

	/**
	* Definimos las variable para los resultados de la consulta completa de la tabla Gerencia
	*/

	$result = mysqli_query($connect,"SELECT * FROM tbl_gerencia");

	while ($row = mysqli_fetch_array($result)){
		echo '<option value="'.$row['id_gerencia'].'">'.$row['Nom_Gerencia'].'</option>';
	}

?>