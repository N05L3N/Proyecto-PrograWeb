<?php error_reporting(0);
$link = mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  mysql_select_db("prograweb", $link)
      or die ("Error al conectar a la base de datos.");
return $link; 
?>
