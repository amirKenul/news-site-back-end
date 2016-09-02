<?php
include "db.php";
$id=$_GET['id'];

if (isset($id)){
	
	$news1 = new news("localhost","root","","connect");

	$news1->delete('news',$id);

	header("Location:select.php");}

?>