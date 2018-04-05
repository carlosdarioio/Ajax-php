<?php

$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
mysql_select_db("pkm",$conexion) or die("Problemas en la selección de la base de datos");  



//$conexion=mysql_connect("localhost","id1672792_root","pkm333333") or die("Problemas en la conexion");
//mysql_select_db("id1672792_pkm",$conexion) or die("Problemas en la selección de la base de datos");  



mysql_query ("SET NAMES 'utf8'");

?>