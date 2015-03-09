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
* Descripcion del Archivo :
*
* Este archivo o documento tiene por objeto generar conexion con el 
* servior de la DB y seleccnonar la DB que utilizaremos para nuestro sistema,
* este archivo tiene como finalidad buscar un nivel minimo de seguridad en 
* el sistema dejando datos delicados como nombre de usuario de la db y password
* fuera del alcanse de ojos curiosos o mal intencionados.
* * * * * * * * * * * * * * * *
*
* la modificacion de este o parte de este puede ocacionar falla en la aplicacion
* este y todos los componentes de este sistema estan protegidos por derechos de
* porpiedad intelectual bajo la ley de derecho de autor que se encuentra regulada 
* por la Ley Chilena N° 17.336 sobre Propiedad Intelectual de 2/10/1970 y sus 
* posteriores modificaciones.
*
* 	Todos los derechos reservados 
* ©Pablo Figueroa Alvarez Marzo 2015
*/


        /**
        * Definimos Variables para los datos de conexion al servidor de la DB
        */
        $db ="DB_Cascam_Control";
        $host ="localhost";
        $user ="root";
        $pswd ="asdasd";
        
        /**
        * Establecemos la conexion al servidor de la DB y seleccionamos la DB a trabajar
        * con la instancia or die le indicamos a mysql_connect() o a mysql_select_db() si 
        * falla nos envie un mensaje de error (mensaje contenido en el "String")
        */
        $conexion = mysql_connect($host,$user,$pswd) or die("No se pudo autentificar con la DB");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db($db,$conexion) or die("No se pudo conectar con la base de datos");
?>