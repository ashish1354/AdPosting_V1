<?php
include("../head/head_category.php");
include("../classes/DBoperation.php");

  	$show=new  DBoperation();
	$del=$_GET['id'];
	echo $del;
	$show->deleteCategory($del);
	header("Location: ".$_GET['sendto']);


	//header("Location: ../views/view_category.php");
?>