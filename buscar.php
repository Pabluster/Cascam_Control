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
    * Definimos las variables a utilizar
    */

    $buscar1 = $_GET['num_int'];

        /**
        * Establecemos conexion con la DB
        * llamando al archivo connect.php
        */
        include("connect.php");

        /**
        * Definimos variables para cada uno de los datos a almacenar
        */

        $query ="SELECT * FROM tbl_mv_eq WHERE Num_Interno LIKE '%$buscar1%' ORDER BY Num_Interno ASC";
        $result = mysql_query($query);

        echo "<table><tr><th>Num_Interno</th><th>Patente</th><th>Km</th><th>Gerencia</th><th>Sup_Int</th><th>Empresa_Area</th><th>Sn_Rf</th><th>Sn_DashBoard</th><th>Ejecutor</th><th>Fecha</th></tr>";
        while ($fila= mysql_fetch_row($result)) {
        	echo "<tr>";
        	for($i=0;$i<mysql_num_fields($result);$i++){
        		echo "<td>".$fila[$i]."</td>";
        	}
        	echo "</tr>";
        }
        echo "</table>";


?>