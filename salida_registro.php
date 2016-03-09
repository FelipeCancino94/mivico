<?php
@session_start();
echo "<li id='enlace_a'><a href='#'>";
echo $_SESSION['usuario'];  
echo "</a></li>";
?>