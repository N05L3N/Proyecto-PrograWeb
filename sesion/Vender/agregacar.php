<?php 
session_start();

extract($_REQUEST);
mysql_connect("localhost","root","");
mysql_select_db("prograweb");
if(!isset($cantidad)){$cantidad=1;}
$qry=mysql_query("select * from catalogo where id='".$id."'");
$row=mysql_fetch_array($qry);
if(isset($_SESSION['prograweb']))
$carro=$_SESSION['prograweb'];
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);

$_SESSION['prograweb']=$carro;
header("Location:Ventas.php?".SID);
?>