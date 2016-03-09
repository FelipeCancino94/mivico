<form method="post" action="ejemplo_buscador.php">
<p>Buscar por nombre</p>
<p>
    <input type="text" name="busca" id="busca">
</p>
<label>
    <input type="submit" name="submit" value="buscar">
</label>
</form>
<?php
    $busca="";
    $busca=$_POST['busca'];
   require("conexion.php");

    if ($busca!="") {
        $busqueda=mysql_query("SELECT * FROM 'usuarios' WHERE nombres LIKE '%".$busca."%'");
        while ($f=mysql_fetch_array($busqueda)) {
            echo $f['nombres'];
        }
    }

?>