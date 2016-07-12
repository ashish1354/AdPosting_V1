<?php
include("../head/head_category.php");
include("../classes/DBoperation.php");

  	$show=new  DBoperation();
	$del=$_GET['id'];
	$show->deleteSubCategory($del);
	header("Location: ".$_GET['sendto']);
?>