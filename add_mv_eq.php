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
    if (isset($_POST['n_int']) && !empty($_POST['n_int']) &&
        isset($_POST['patente']) && !empty($_POST['patente']) &&
        isset($_POST['km']) && !empty($_POST['km']) &&
        isset($_POST['gerencia']) && !empty($_POST['gerencia']) &&
        isset($_POST['su_int']) && !empty($_POST['su_int']) &&
        isset($_POST['empresa']) && !empty($_POST['empresa']) &&
        isset($_POST['sn_rf']) && !empty($_POST['sn_rf']) &&
        isset($_POST['sn_dash']) && !empty($_POST['sn_dash']) &&
        isset($_POST['ejecutor']) && !empty($_POST['ejecutor']) &&
        isset($_POST['fecha']) && !empty($_POST['fecha']) &&
        isset($_POST['proceso']) && !empty($_POST['proceso'])
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
        $n_intRG     = trim($_POST['n_int']);
        $patenteRG   = trim($_POST['patente']);
        $kmRG        = trim($_POST['km']);
        $gerenciaRG  = trim($_POST['gerencia']);
        $siRG        = trim($_POST['su_int']);
        $empresaRG   = trim($_POST['empresa']);
        $sn_rfRG     = trim($_POST['sn_rf']);
        $sn_dashRG   = trim($_POST['sn_dash']);
        $ejecutorRG  = trim($_POST['ejecutor']);
        $fechaRG     = trim($_POST['fecha']);
        $procesoRG   = trim($_POST['proceso']);
        $comentRG    = trim($_POST['comentario'])
        
        /**
        * Definimos una query para insertar datos a nuestra tabla
        * Por medio de un INSERT INTO seleccionamos la tabla y las columnas en las cuales
        * se almacenaran los datos que fueron guardados de forma temporal en las variables
        * antes definidas ($variableRG)
        * Con el comando values indicamos que variable sera almacenada en las columnas
        * antes seleccionadas, como los datos almacenados en las variables son del caracter string
        * deben ir entre comilla simple.
        */
        

        $query = "SELECT * FROM tbl_mv_eq WHERE Num_Interno='$n_intRG'";
        $cod = mysql_query($query) or die()(mysql_error());
        $total = mysql_num_rows($cod);
        
        if ($total > 0){

            echo "El vehiculo con el $n_intRG ya existe";
            
        }else{ 
            mysql_query(
            "INSERT INTO tbl_mv_eq (Num_Interno,Patente,Km,Gerencia,Sup_Int,Empresa_Area,Sn_Rf,Sn_DashBoard,Ejecutor,Fecha,Proceso,Comentario) 
            VALUES('$n_intRG','$patenteRG','$kmRG','$gerenciaRG','$siRG','$empresaRG','$sn_rfRG','$sn_dashRG','$ejecutorRG','$fechaRG,'$procesoRG','$comentRG')");
            echo "<a href=add_mv_eq.html>Volver al formulario</a>";
            echo "<br><a href=index.html>Ir al Formulario de Movimiento de Equipos</a><br>";
            }
    }else{
        /**
        * Enviamos un mensaje de error si no se cumple la sentencia de comprobacion
        * invocada en el if, el cual valida que existan datos en los campos comprobados
        */
        echo "<br>Los unicos datos que no son obligatorios son los comentariosz<br>";
        echo "revise que el resto de los campos del formulario esten bien ingresados<br>";
        echo "<br><a href=add_mv_eq.html>Volver al formulario</a><br>";
    }
?>