<?php
session_start();
extract($_GET);
$carro=$_SESSION['prograweb'];
unset($carro[md5($id)]);
$_SESSION['prograweb']=$carro;
header("Location:ventas.php?".SID);
?>