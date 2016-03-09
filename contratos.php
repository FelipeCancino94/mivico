<?php
    $empresa=$_POST['empresa'];
    $tipo_empresa=$_POST['tipo_empresa'];
    $fecha_inicio=$_POST['fecha_inicio'];
    $fecha_final=$_POST['fecha_final'];
    

    require("conexion.php");
    mysql_query("INSERT INTO contratos(empresa,tipo_empresa,fecha_inicio,fecha_final) values('$empresa','$tipo_empresa','$fecha_inicio','$fecha_final')");


header('Location: sesion_administrador.php');

mysql_close();



?>