<?php


	include("../classes/DBoperation.php");
	$show=new  DBoperation();
	$cid=$_GET["cid"];
	$search=$_GET["search"];


	$result_1=$show->getCategoryName();
	$result  = $show->searchADByCategory(0,$cid,$search);

?>