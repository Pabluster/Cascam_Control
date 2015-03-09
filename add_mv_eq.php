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
* Version 0.0.1
* Fecha Modificacion 20150308
* Hora ultima modificacion 06:18:20
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
    **/
    if (isset($_POST['patente']) && !empty($_POST['patente']) &&
        isset($_POST['km']) && !empty($_POST['km']) &&
        isset($_POST['n_int']) && !empty($_POST['n_int']) &&
        isset($_POST['gerencia']) && !empty($_POST['gerencia']) &&
        isset($_POST['si']) && !empty($_POST['si']) &&
        isset($_POST['area']) && !empty($_POST['area']) &&
        isset($_POST['empresa']) && !empty($_POST['empresa']) &&
        isset($_POST['sn_rf']) && !empty($_POST['sn_rf']) &&
        isset($_POST['sn_dash']) && !empty($_POST['sn_dash']) &&
        isset($_POST['ejecutor']) && !empty($_POST['ejecutor']) &&
        isset($_POST['fecha']) && !empty($_POST['fecha'])
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
        $n_intRG     = $_POST['n_int'];
        $patenteRG   = $_POST['patente'];
        $kmRG        = $_POST['km'];
        $gerenciaRG  = $_POST['gerencia'];
        $siRG        = $_POST['si'];
        $areaRG      = $_POST['area'];
        $empresaRG   = $_POST['empresa'];
        $sn_rfRG     = $_POST['sn_rf'];
        $sn_dashRG   = $_POST['sn_dash'];
        $ejecutorRG  = $_POST['ejecutor'];
        $fechaRG     = $_POST['fecha'];
        
        /**
        * Definimos una query para insertar datos a nuestra tabla
        * Por medio de un INSERT INTO seleccionamos la tabla y las columnas en las cuales
        * se almacenaran los datos que fueron guardados de forma temporal en las variables
        * antes definidas ($variableRG)
        * Con el comando values indicamos que variable sera almacenada en las columnas
        * antes seleccionadas, como los datos almacenados en las variables son del caracter string
        * deben ir entre comilla simple.
        */
        mysql_query(
            "INSERT INTO TBL_MV_EQ(Patente,Km,Num_Interno,Gerencia,Sup_Int,Area,Empresa,Sn_Rf,Sn_DashBoard,Ejecutor,Fecha) 
            values('$patenteRG','$kmRG','$n_intRG','$gerenciaRG','$siRG','$areaRG','$empresaRG','$sn_rfRG','$sn_dashRG','$ejecutorRG','$fechaRG') 
            "); 
        /**
        * Cerramos la Query de insercion de datos
        */

        /**
        * Enviamos un mensaje si la insercion de datos fue correcta
        */
        echo "<br>Los datos fueron guardados correctamente<br>";
        echo "<a href=add_mv_eq.html>Volver al formulario</a>";
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
        echo "<br>Debe completar todos los datos del formulario<br>";
        echo "<br><a href=add_mv_eq.html>Volver al formulario</a><br>";
    }
?>