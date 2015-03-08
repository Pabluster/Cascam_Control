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
    * Por medio de un if hacemos comparacion de las variables y el metodo POST
    * con la finalidad de comprobar que no tengamos campos vacios en el formulario
    */
    if (isset($_POST['empresa']) && !empty($_POST['empresa']) &&
        isset($_POST['rut']) && !empty($_POST['rut']) &&
        isset($_POST['giro']) && !empty($_POST['giro']) &&
        isset($_POST['area']) && !empty($_POST['area'])
        )
    {
        
        /**
        * Establecemos conexion con la DB
        * llamando al archivo connect.php
        */
        include("connect.php");

        /**
        * Definimos variables para cada uno de los datos a almacenar
        */
        $empresaRG = $_POST['empresa'];
        $rutRG     = $_POST['rut'];
        $giroRG    = $_POST['giro'];
        $areaRG    = $_POST['area'];
        
        /**
        * Definimos una query para insertar datos a nuestra tabla
        * Por medio de un INSERT INTO seleccionamos la tabla y las columnas en las cuales
        * se almacenaran los datos que fueron guardados de forma temporal en las variables
        * antes definidas ($variableRG)
        * Con el comando values indicamos que variable sera almacenada en las columnas
        * antes seleccionadas, como los datos almacenados en las variables son del caracter string
        * deben ir entre comilla simple.
        */
        mysql_query("INSERT INTO TBL_Empresa(Nom_Empresa,Rut,Giro,Area) values('$empresaRG','$rutRG','$giroRG','$areaRG') ");
        /**
        * Cerramos la Query de insercion de datos
        */

        /**
        * Enviamos un mensaje si la insercion de datos fue correcta
        */
        echo "Los datos fueron guardados correctamente<br>";
        echo "<a href=add_empresa.html>Volver al formulario</a>";
        echo "<br><a href=index.html>Ir al Formulario de Movimiento de Equipos</a><br>";
    }
    /**
    * Si la condicion del if NO cumple en su totalidad ejecutamos un else (entonces)
    */
    else
    {
        /**
        * Enviamos un mensaje de error
        */
        echo "<br>Todos los datos son obligatorios<br>";
        echo "<br><a href=add_empresa.html>Volver al formulario</a><br>";
    }
?>